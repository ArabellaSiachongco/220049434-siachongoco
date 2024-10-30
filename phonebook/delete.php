<?php
include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id); 
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Contact deleted successfully.";
    } else {
        echo "Error deleting contact.";
    }

    $stmt->close();
}
$conn->close();
header("Location: index.php"); 
?>
