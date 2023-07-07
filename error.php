<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<style>
.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: 15%;
}
</style>

<body style="background-color:#414a4c; color:white; text-align:center;">
    <div class="container">
        <h1>
            <strong>
                Can not Signup because <br>
                User already register with this Email
            </strong>
        </h1>
        <br>
        <p><a href="./signup.php"><button type="submit" class="btn btn-primary" name="signup">Go Back</button></a>
        </p>
        <p><strong>OR</strong></p>
        <p><a href="./login.php"><button type="submit" class="btn btn-primary" name="login">Login</button></a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>