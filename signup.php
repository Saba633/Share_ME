<?php
include("db.php");
if (isset($_POST['submit'])) {

    $query = "SELECT * FROM signup WHERE email_id = '{$_POST["email"]}'";
    // die($query);
    $run = mysqli_query($dbconnection, $query);
    $data = mysqli_fetch_array($run);
    if (count($data) > 0) {
        $_SESSION['isUserLoggedIn'] = true;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['username'] = $_POST['username'];
        echo "<script>window.location.href='error.php?user_already_register_with_this_email';</script>";
    } else {
        $query = "INSERT INTO signup(full_name,email_id,password,role) VALUES ('{$_POST['username']}','{$_POST['email']}','{$_POST['password']}', 'user')";
        $run = mysqli_query($dbconnection, $query);
        if ($run) {
            echo "<script>window.location.href='redirect.php?please_wait';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp to ShareME</title>
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
        height: 65vh;
    }
</style>

<body style="background-color:#414a4c; color:white; text-align:center;">
    <div class="container">
        <h1 style="text-align: center;">
            <strong>
                SignUp to Browse
            </strong>
        </h1>
        <div class="row">
            <form style="margin-top: 30px;" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Enter Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required minlength="4">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Enter your Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Enter Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <a href="./login.php"><button type="button" class="btn btn-primary" name="login" style="margin-left:29%;">Login</button></a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>