<?php
require 'db.php';

if (isset($_GET['ID'])) {  
    $id = $_GET['ID'];

    try {
        $stmt = $conn->prepare("DELETE FROM contact_form WHERE ID = :ID");
        $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Redirect back to the admin panel after deletion
        header("Location: admin_panel.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null; // Close the connection
} else {
    echo "Invalid ID.";
}
?>
