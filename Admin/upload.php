<?php
if (isset($_POST['submit'])) {
    foreach ($_FILES['image']['name'] as $key => $val) {
        move_uploaded_file($_FILES['image']['tmp_name'][$key], '../uploading/' . $val);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: Upload Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <link rel="stylesheet" href="./home.css">
</head>
<style>
    .container {
        max-width: 600px;
    }

    .card {
        float: left;
    }
</style>

<body style="background-color:#414a4c;">
    <?php
    include('db.php');
    include('navbar.php');
    include('sidebar.php');
    ?>
    <div class="container mt-5">
        <form action="" method="POST" enctype="multipart/form-data" id="imageInputForm">
            <div class="custom-file">
                <input type="file" id="image" class="form-control form-control-lg" name="image[]" onchange="showImageHereFunc();" multiple />
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-block mt-4" value="Upload" />
        </form>
        <div class="user-image mb-3 text-center">
            <div id="showImageHere">
                <div class="card-group">
                    <div class="row">
                        <!-- Image preview -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $('#imageInputForm').ajaxForm(function() {
                alert("Images Uploaded!");
            });
        });

        function showImageHereFunc() {
            var total_file = document.getElementById("image").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#showImageHere').append("<div class='card col-md-4'><img class='card-img-top' src='" + URL
                    .createObjectURL(event.target.files[i]) + "'></div>");
            }
        }
    </script>
</body>

</html>