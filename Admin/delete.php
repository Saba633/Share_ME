<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="margin-left: 30%;">
        <table>
            <tbody>
                <tr>
                    <td>
                        <?php

                        include("db.php"); // Using database connection file here

                        $id = $_GET['id']; // get id through query string
                        $query = "DELETE FROM signup WHERE id = '$id'";
                        $del = mysqli_query($dbconnection, $query); // delete query

                        if ($del) {
                            mysqli_close($dbconnection); // Close connection
                            header("location:user.php"); // redirects to all records page
                            exit;
                        } else {
                            echo "Error deleting record"; // display error message if not delete
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>