<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User Images</title>
    <link rel="stylesheet" href="./home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
img {
    height: auto;
    max-width: 100%;
    width: 25%;
    margin-left: 10px;
    margin-top: 10px;
}
</style>

<body style="background-color:#414a4c;">
    <table>
        <?php
        include('sidebar.php');
        include('../top.php');
        $files = glob("../UploadedByUser/*");
        foreach ($files as $file) {


            echo '<form method="post" style="float:left">';
            echo '<tr>';
            echo '<td>';
            echo '<br>';
            echo '<img src="' . $file . '" name="delete_file" class="rounded mx-auto d-block"/>';
            echo '<br>';
            echo '<input type="text" class="input-group-text col-md-4"  style="margin-top:5px; margin-left:35%;" value="' . $file . '" name="delete_file" />';
            echo '<input type="submit" class="btn btn-danger" value="Delete image" style="margin-top:5px; margin-left:45%;" />';
            echo "</td>";
            echo "</tr>";
            echo '</form>';
            if (array_key_exists('delete_file', $_POST)) {
                $filename = $_POST['delete_file'];
                if (file_exists($filename)) {
                    unlink($filename);
                    echo 'File ' . $filename . ' click the delete button again to delete image';
                }
            }
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>;