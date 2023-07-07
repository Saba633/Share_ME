<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Spiritual</title>
    <link rel="stylesheet" href="./home.css">
</head>

<body style="background-color:#414a4c; color:white; text-align:center;">
    <?php
    include('navbar.php');
    include('sidebar.php');
    include('top.php');
    ?>
    <div style="margin-left: 200px;">
        <?php

        $dir_path = "./uploads/spiritual/";
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
    <script>
        backButton = document.getElementById("back");
        nextButton = document.getElementById("next");
        number = document.getElementById("number");
        var i = 1;

        function ready() {
            backButton.disabled = true;
        }

        function next() {
            i++;
            if (i == 7) {
                nextButton.disabled = true;
            }
            backButton.disabled = false;
            number.innerHTML = i;
        }

        function back() {
            i--;
            if (i == 1) {
                backButton.disabled = true;
            }
            nextButton.disabled = false;
            number.innerHTML = i;
        }
    </script>
</body>

</html>