<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./script.css">

</head>
<!-- DropDown CSS -->
<style>
.dropbtn {
    background-color: #484848;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #484848;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #212121;
}

.search_bar {
    margin-left: 1rem;
}

.search_bar input {
    padding: 0.7rem;
    border-radius: 20px;
    border: none;
    background-color: #eee;
    width: 400px;
    margin-right: 15px;
    font-size: 0.9rem;
    color: #333;
}

.search_bar input:hover {
    background-color: #fff;
}
</style>

<body>
    <!-- First Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:20%;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-left:300px;">
                    <li class="nav-item">
                        <a href="./home.php" style="text-decoration: none; color:white;">
                            <h5> <i class="fa-solid fa-camera-retro"></i> ShareME</h5>
                        </a>
                    </li>
                </ul>
                <!-- <div class="search_bar">
                    <form action="">
                        <input type="text" name="search" id="search" class="search_bar" placeholder="Search Here">
                    </form>
                </div> -->
                <div class="dropdown">
                    <a href="home.php" style="margin-right: 10px;"><button class="dropbtn">Browse</button></a>
                </div>
                <div class="dropdown">
                    <a href="./template.php" style="margin-right: 10px;"><button class="dropbtn">Templates</button></a>
                </div>
                <div class="dropdown">
                    <a href="./upload.php" style="margin-right: 10px;"><button class="dropbtn"><i
                                class="fa-solid fa-cloud-arrow-up"></i> Upload</button></a>
                </div>
                <div class="dropdown">
                    <a href="./editors//index.php" style="margin-right: 10px;"><button class="dropbtn">Open
                            Editor</button></a>
                </div>
                <div class="dropdown">
                    <a href="logout.php" style="margin-right: 10px;"><button class="dropbtn">Logout</button></a>
                </div>
            </div>
        </div>
    </nav>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>