<?php
// Include contact class
require_once 'Class/Contact.php';

// Create a new Contact object
$contact = new Contact();

// Retrieve contacts from the database
$contacts = $contact->getAllContacts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Management System</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Contact Management System</h1>
    </header>

    <div class="container">
        <h2>Add New Contact</h2>
        <form action="add_contact.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" name="phone" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="notes">Notes:</label>
                <textarea name="notes"></textarea>
            </div>

            <input type="submit" value="Add Contact">
        </form>

        <h2>Contact List</h2>
        <ul class="contact-list">
            <!-- Display each contact in the list -->
            <?php foreach ($contacts as $contact) : ?>
                <li><a href=<?php echo "view_contact.php?id={$contact['id']}" ?>><?php echo $contact['name'] ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>
