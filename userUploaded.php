<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Uploaded</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./script.css">

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

<body style="background-color:#414a4c; color:white; text-align:center;">

    <?php include('navbar.php'); ?>
    <?php include('sidebar.php'); ?>

    <div class="content">

        <table>
            <tbody>
                <tr>
                    <div style="margin-left: 13%;">
                        <?php

                        $dir_path = "./UploadedByUser/";
                        $extensions_array = array('jpg', 'png', 'jpeg');

                        if (is_dir($dir_path)) {
                            $files = scandir($dir_path);

                            for ($i = 0; $i < count($files); $i++) {
                                if ($files[$i] != '.' && $files[$i] != '..') {

                                    // get file extension
                                    $file = pathinfo($files[$i]);
                                    $extension = $file['extension'];

                                    // check file extension
                                    if (in_array($extension, $extensions_array)) {
                                        // show image
                                        // echo "<img src='$dir_path$files[$i]' style='width:200px;height:200px; margin-top:10px; margin-left:20px' >";
                                        // echo "<img src='$dir_path$files[$i]' id='myImg' class='rounded float-start img1'  style='margin-left:10px;margin-top:10px;width:250px; height:250px;' >";
                                        echo "<a href='$dir_path$files[$i]' download><img src='$dir_path$files[$i]' id='myImg' title='click on me to download'/> </a>";
                                    }
                                }
                            }
                        }
                        ?>
                    </div>

                </tr>
            </tbody>
        </table>

        <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
        </script>
        <script>
        async function downloadImage(imageSrc) {
            const image = await fetch(imageSrc)
            const imageBlog = await image.blob()
            const imageURL = URL.createObjectURL(imageBlog)

            const link = document.createElement('a')
            link.href = imageURL
            link.download = 'image file name here'
            document.body.appendChild(link)
            link.click()
            document.body.removeChild(link)
        }
        </script>
    </div>
</body>

</html>