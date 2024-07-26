<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $nom = $_POST['last_name'];    
    $prenom = $_POST['first_name']; 
    $email = $_POST['email'];
    $objet = $_POST['subject'];      
    $message = $_POST['message'];

    try {
        // Prepare SQL and bind parameters
        $stmt = $conn->prepare("INSERT INTO contact_form (last_name, first_name, email, subject, message) VALUES (:last_name, :first_name, :email, :subject, :message)");
        $stmt->bindParam(':last_name', $nom); 
        $stmt->bindParam(':first_name', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $objet);
        $stmt->bindParam(':message', $message);

        // Execute the statement
        $stmt->execute();
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;
}
?>
