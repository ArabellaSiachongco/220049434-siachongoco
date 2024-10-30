<?php
include "db.php";

$message = "";
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    // Fetch contact info
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $contact = $result->fetch_assoc();
    $stmt->close();
    
    if (!$contact) {
        die("Contact not found.");
    }
} else {
    die("Invalid request.");
}

// Update contact info
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $stmt = $conn->prepare("UPDATE contacts SET name = ?, phone = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $phone, $id);
    $stmt->execute();

    $message = ($stmt->affected_rows > 0) ? "Contact updated successfully." : "No changes made.";
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; padding: 20px; }
        .form-container { max-width: 300px; margin: auto; padding: 20px; background-color: white; border-radius: 8px; }
        input[type="text"], input[type="submit"] { width: 100%; padding: 10px; margin: 10px 0; }
        input[type="submit"] { background-color: #7979ff; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #6464db; }
        .message { color: green; font-size: 16px; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Contact</h2>
        <?php if (!empty($message)) echo "<p class='message'>$message</p>"; ?>
        <form method="POST">
            <input type="text" name="name" value="<?php echo htmlspecialchars($contact['name']); ?>" required>
            <input type="text" name="phone" value="<?php echo htmlspecialchars($contact['phone']); ?>" required>
            <input type="submit" value="Update Contact">
        </form>
        <a href="index.php">Back to Contacts</a>
    </div>
</body>
</html>
