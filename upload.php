<?php
include('db.php');
if (isset($_POST['submit'])) {
    $file = $_FILES['image'];
    $category = $_POST['category'];

    // echo "<pre>";
    // print_r($file);
    // echo "</pre>";

    $file_name = $file['name'];
    $file_path = $file['tmp_name'];
    $file_error = $file['error'];

    if ($file_error == 0) {
        $dest_file = 'UploadedByUser/' . $file_name;
        // echo "$dest_file";
        move_uploaded_file($file_path, $dest_file);

        $insert = "INSERT INTO upload(image, category) VALUES('$dest_file', '$category')" or die($insert);
        $query = mysqli_query($dbconnection, $insert);
    } else {
        echo "<script>window.location.href='upload.php?Error_uploading_image';</script>";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Share_ME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<style>
    img {
        height: auto;
        max-width: 100%;
        width: 50%;
        margin-left: 100px;
        margin-top: 10px;
    }
</style>

<body style="background-color:#414a4c; color:white;">
    <?php include('navbar.php'); ?>
    <?php include('sidebar.php'); ?>
    <?php if (isset($_GET['Error_uploading_image'])) {
    ?>
        <p style="text-align:center;color:red;"><b>Image is greater then 2MB</b></p>
    <?php
    }
    ?>
    <div class="container">
        <div class="row col-md-6" style="margin-left: 15%; margin-top:5%;">
            <div style="float: left;">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <input class="form-control" type="file" onchange="previewFile(this);" accept="image/*" name="image" />
                    </div>
                    <div class="input-group mb-3" style="margin-top: 5px;">
                        <select class="form-select" id="category" name="category" required>
                            <option selected disabled value="">Categories</option>
                            <option value="Animal">Animals</option>
                            <option value="Art$Culture">Art&Culture</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Food">Food</option>
                            <option value="Health">Health</option>
                            <option value="Logo">Logo</option>
                            <option value="Nature">Nature</option>
                            <option value="people">People</option>
                            <option value="Places">Places</option>
                            <option value="photography">Photography</option>
                            <option value="Random">Randoms</option>
                            <option value="Spirituality">Spirituality</option>
                            <option value="technology">Technology</option>
                            <option value="Travel">Travel</option>
                            <option value="Travel">Travels</option>
                            <option value="Wallpaper">Wallpaper</option>
                            <option value="Workout">Workout</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2 d-md-block" style="float: left;margin-left:3px;">
                        <input class="btn btn-primary" type="submit" name="submit" value="Upload">
                    </div>
                </form>
                <div>
                    <a href="./userUploaded.php" style="margin-left:5px"><button class="btn btn-primary">Images uploaded
                            by other
                            users</button></a>
                </div>
                <div style="float:right;">
                    <img id="previewImg" src="/examples/images/transparent.png" alt="">
                </div>
                <div id="hide" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    Your Image will be shown here
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewFile(input) {
            var file = $("input[type=file]").get(0).files[0];

            if (file) {
                var reader = new FileReader();
                document.getElementById('hide').style.display = "none";

                reader.onload = function() {
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>