<?php
include "db.php";

$message = ""; 

// Handle delete request
if (isset($_GET['delete_id'])) {
    $id = (int)$_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $message = ($stmt->affected_rows > 0) ? "Contact deleted successfully." : "Error deleting contact.";
    $stmt->close();
}

// Retrieve contacts
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; padding: 20px; }
        table { width: 60%; margin: auto; border-collapse: collapse; background-color: white; }
        th, td { padding: 10px; }
        th { background-color: #7979ff; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .action-btn { color: #7979ff; cursor: pointer; text-decoration: none; margin: 0 5px; }
        .message { color: green; font-size: 16px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>My Contacts</h1>
    <?php if (!empty($message)) echo "<p class='message'>$message</p>"; ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                echo "<td>
                        <a href='edit.php?id=" . $row['id'] . "' class='action-btn'>Edit</a>
                        <a href='index.php?delete_id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\");' class='action-btn'>Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No Contacts</td></tr>";
        }
        ?>
    </table>
</body>
</html>
