<?php
require 'db.php';

try {
    $stmt = $conn->prepare("SELECT * FROM contact_form");
    $stmt->execute();
    $contact_forms = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null; // Close the connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Contact Form Submissions</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                    <th>Actions</th> 
                </tr>
            </thead>
            <tbody>
                <?php if ($contact_forms): ?> <!-- Check if there are any submissions -->
                    <?php foreach ($contact_forms as $contact_form): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($contact_form['ID']); ?></td> <!-- Ensure 'ID' matches the database column name -->
                        <td><?php echo htmlspecialchars($contact_form['first_name']); ?></td>
                        <td><?php echo htmlspecialchars($contact_form['last_name']); ?></td>
                        <td><?php echo htmlspecialchars($contact_form['email']); ?></td>
                        <td><?php echo htmlspecialchars($contact_form['subject']); ?></td>
                        <td><?php echo htmlspecialchars($contact_form['message']); ?></td>
                        <td><?php echo htmlspecialchars($contact_form['created_at']); ?></td>
                        <td>
                            <a href="delete_contact.php?ID=<?php echo $contact_form['ID']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">No submissions found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
