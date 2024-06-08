<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        .success {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Contact Us</h1>
    <?php if (!empty($_SESSION['success_message'])): ?>
        <p class="success"><?php echo $_SESSION['success_message']; ?></p>
        <?php unset($_SESSION['success_message']); ?>
    <?php endif; ?>
    <form action="index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
