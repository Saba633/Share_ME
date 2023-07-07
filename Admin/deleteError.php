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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Users</title>
</head>

<style>
table {
    text-align: center;
}
</style>

<body style="background-color:#414a4c; color:white;">
    <?php include('sidebar.php'); ?>
    <div class="content">
        <table>
            <table class="col-md-6" style="margin-left: 30%;">
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
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" id="Dbtn"
                                onclick="sure()">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div style="width: 600px; margin-left:30%; margin-top:5%;">
                <h3 style="color: red; text-align:center;">
                    Are you sure you want to delete this user? <br> by clicking the delete button the user will
                    permanently be deleted from the database
                </h3>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>