<?php
include("../admin/db.php");
if (isset($_POST['login'])) {
    $select = "SELECT * FROM admin WHERE email = '" . $_POST['email'] . "' AND password = '" . $_POST['password'] . "'";
    $run = mysqli_query($dbconnection, $select);
    if (mysqli_num_rows($run)) {
        echo "<script>window.location.href='welcome.php?Welcome_admin';</script>";
    } else {
        echo "<div
        style='background-color:red; color:black; text-align:center;width:200px; margin-top:10px; margin-left:20px;'>Invalid Password or Email</div>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<style>
body {
    background-color: #414a4c;

}

form {
    text-align: center;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    color: white;
}
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="box">
                <h1 class="mt-5" style="text-align: center;"><strong>Welcome Admin Login to continue</strong></h1>
                <form method="post" class="form1 mt-5">
                    <div class="mb-3">
                        <label for="email" class="form-label">Admin Email </label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Admin Password </label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
