<?php
include("./db.php");
if (isset($_POST['login'])) {
    $query = "SELECT * FROM signup WHERE email_id = '{$_POST['email']}'  AND password = '{$_POST['password']}'";
    $run = mysqli_query($dbconnection, $query);
    $data = mysqli_fetch_array($run);
    if (count($data) > 0) {
        $_SESSION['isUserLoggedIn'] = true;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['role'] = $data['role'];
        echo "<script>window.location.href='profile.php?welcome_user';</script>";
    } else {
        echo "<script>window.location.href='login.php?Incorrect_email_or_password';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<style>
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 140px;
    box-shadow: 3px 3px 3px 4px grey;
    width: 40%;
    height: 70vh;
}
</style>

<body style="background-color:#414a4c; color:white;">
    <div class="container">
        <h1 style="text-align: center;">
            <strong>
                Login to your account
            </strong>
        </h1>
        <!-- error message -->
        <?php if (isset($_GET['Incorrect_email_or_password'])) {
        ?>
        <p style="text-align:center;color:red;"><b>Incorrect Email or Password</b></p>
        <?php
        }
        ?>
        <!-- error message -->
        <?php if (isset($_GET['user_not_logged_in_yet'])) {
        ?>
        <p style="text-align:center;color:red;"><b>Login To Continue</b></p>
        <?php
        }
        ?>
        <div class="row">
            <form method="POST" style="margin-top:9%">
                <!-- <div class="mb-3">
                    <label for="username" class="form-label">Enter Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"
                        required>
                </div> -->
                <div class="mb-3">
                    <label for="email" class="form-label">Enter your Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Enter your Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
                <a href="./signup.php"><button type="button" class="btn btn-primary" name="signup"
                        style="margin-left:60%;">Signup</button></a>
            </form>

            <a href="./admin/adminLogin.php"><button type="submit" class="btn btn-primary" name="signup"
                    style="float: right; margin-top:1%;">Login as Admin</button></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>