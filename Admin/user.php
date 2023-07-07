<?php
include('db.php');
if (!$dbconnection) {
    die('Could not connect: ');
}
$query = "SELECT * FROM signup";
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

<body style="background-color:#414a4c; color:white">
    <?php include('sidebar.php'); ?>
    <table class="col-md-6" style="margin-left: 30%;margin-top:20px">
        <h1 style="margin-left: 45%; margin-top:20px;">Edit Users</h1>
        <hr>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $id = $_GET['id'];
            while ($row = mysqli_fetch_array($run)) {
            ?>
            <tr>
                <td>
                    <?php echo $row['id']; ?>
                </td>
                <td>
                    <?php echo $row['full_name']; ?>
                </td>
                <td>
                    <?php echo $row['email_id']; ?>
                </td>
                <td>
                    <?php echo $row['password']; ?>
                </td>
                <td>
                    <?php echo $row['role']; ?>
                </td>
                <td>
                    <a href="./deleteError.php" class="btn btn-danger" id="Dbtn" onclick="sure()">
                        Delete
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>