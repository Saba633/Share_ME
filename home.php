<?php include('db.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
    echo "<script>window.location.href='login.php?user_not_logged_in_yet';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Browse Share_ME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body style="background-color:#414a4c; color:white; text-align:center;">
    <?php
    include('navbar.php');
    include('sidebar.php');
    ?>
    <div class=" container">
        <img src="./SliderImage//edited_image.png" alt="" style="width: 100%;height:70vh;opacity:0.5;margin-left:80px;">
        <div class="centered">
            <h1>Welcome to Share_ME</h1>
            <p style="font-size: 22px;">
                A platform that will allow you to download images for free and use them whereever however you want
                <br>
                You can also edit your images in our own <a href="./editors//index.php" style="text-decoration: none; color:whitesmoke;"><b>Editor</b></a>
            </p>
        </div>
    </div>
    <div style="margin-left: 200px;">
        <?php

        $dir_path = "./uploading/";
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
    <?php include 'top.php'; ?>
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
</body>

</html>