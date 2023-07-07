<?php
include('db.php');
if (!$dbconnection) {
    die('Could not connect: ');
}
$query = "SELECT * FROM signup Order By full_name Desc Limit 1";
$run = mysqli_query($dbconnection, $query);


if (!$run) {
    die('Could not get data: ');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./home.css">
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


<body style="background-color:#414a4c; color:white">
    <?php include('sidebar.php'); ?>
    </table>
    <div class="center">
        After you allow User to visit Site, User have to wait for sometime in order to Login to system
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>