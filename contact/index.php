<?php
include '../header/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h1>CONTACT FORM</h1>
            <form action="https://formsubmit.co/pandasujit28@gmail.com" method="POST">
            <input type="text" name="Name" placeholder="Full Name" required>
            <input type="email" name="Email" placeholder="Email" required>
        <textarea name="Message" placeholder="Message" required></textarea>
        <button type="submit">Send</button>
        </form>

    </div>
</body>
</html>
