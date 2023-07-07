<?php
include('db.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
    echo "<script>window.location.href='login.php?user_not_logged_in_yet';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>

<body style="background-color:#414a4c; color:white; text-align:center;">
    <?php include('navbar.php'); ?>
    <div class="container" style="margin-top: 20%;">
        <h1>
            Welcome
        </h1>
        </p>
        <h3>
            <?= $_SESSION['email']; ?>
        </h3>
    </div>
</body>

</html>