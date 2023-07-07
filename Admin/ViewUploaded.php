 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>View Uploaded Images </title>
     <link rel="stylesheet" href="./home.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 </head>

 <body style="background-color:#414a4c;">

     <?php
        include('sidebar.php');
        include('db.php');
        include('../top.php');
        $files = glob("../uploading/*");
        foreach ($files as $file) {


            echo "<div style='float:left; margin-left:5px;margin-top:5px'>";
            echo '<form method="post">';
            echo "<tr>";
            echo "<td>";
            echo '<input type="hidden" value="' . $file . '" name="delete_file" />';
            echo '<img src="' . $file . '" name="delete_file"/>';
            echo "</td>";
            echo "</tr>";
            echo "<br>";
            echo "<tr>";
            echo "<td>";
            echo '<input type="submit" class="btn btn-danger" style="margin-top:5px; margin-left:45%;" value="Delete image" />';
            echo '</form>';
            echo "</td>";
            echo "</tr>";
            echo " </div>";
            if (array_key_exists('delete_file', $_POST)) {
                $filename = $_POST['delete_file'];
                if (file_exists($filename)) {
                    unlink($filename);
                    echo 'File ' . $filename . '<b style="font-size:20px"> click the delete button again to completely delete image </b>';
                }
            }
        }
        ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
     </script>
 </body>

 </html>