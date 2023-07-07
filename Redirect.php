<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Wait</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>
<style>
    .center {
        display: flex;
        flex-direction: column;
        text-align: center;
        margin-top: 15%;
        font-size: 22px;
    }
</style>

<body style="background-color:#414a4c; color:white; text-align:center;">
    <div class="center">
        <p>
            Please Wait for sometime, admin will approve your request to visit <b>Share_ME</b>
        </p>
        <p>
            Thank You for your consideration
        </p>
        <p>
            <a href="./login.php"><button type="button" id="allow" onclick="allow()" class="btn btn-success" name="login">Login</button></a>
        </p>
    </div>

    <script>
        document.getElementById('allow').style.display = "none";
        const myTimeout = setTimeout(myGreeting, 10000);

        function myGreeting() {
            document.getElementById('allow').style.display = '';
            document.getElementById('allow').innerHTML = "You can login now, Thank you for waiting";
        }
    </script>
</body>

</html>