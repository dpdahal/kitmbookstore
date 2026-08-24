<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home</a>
    <a href="about.php">About us</a>
    <a href="contact.php">Contact</a>
    <?php if(isset($_SESSION['auth'])) { ?>
        Welcome: <?php echo $_SESSION['auth']['name']; ?>
        <a href="logout.php">Logout</a>
    <?php } else { ?>

    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
    <?php } ?>
    <hr>
    <?php if(isset($_SESSION['success'])) { ?>
    <h1><?php echo $_SESSION['success']; ?></h1>
    <?php unset($_SESSION['success']); 
    } ?>


    <?php if(isset($_SESSION['error'])) { ?>
    <h1><?php echo $_SESSION['error']; ?></h1>
    <?php unset($_SESSION['error']); 
    } ?>

