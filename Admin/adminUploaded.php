<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./home.css">

</head>
<style>
    img {
        height: auto;
        max-width: 100%;
        width: 23%;
        margin-left: 10px;
        margin-top: 10px;
    }
</style>

<body>

    <?php include('navbar.php'); ?>
    <?php include('sidebar.php'); ?>

    <div class="content">

        <table>
            <tbody>
                <tr>
                    <div style="margin-left: 13%;">

                        <?php

                        $dir_path = "./upload/";
                        $extensions_array = array('jpg', 'png', 'jpeg');

                        if (is_dir($dir_path)) {
                            $files = scandir($dir_path);

                            for ($i = 0; $i < count($files); $i++) {
                                if ($files[$i] != '.' && $files[$i] != '..') {

                                    $file = pathinfo($files[$i]);
                                    $extension = $file['extension'];
                                    if (in_array($extension, $extensions_array)) {
                                        echo "<img src='$dir_path$files[$i]' id='myImg'/>";
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
            </tbody>
        </table>

        <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
        </script>
    </div>
</body>

</html>