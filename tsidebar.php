<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.sidenav {
    height: 100%;
    /* Full-height: remove this if you want "auto" height */
    width: 180px;
    /* Set the width of the sidebar */
    position: fixed;
    /* Fixed Sidebar (stay in place on scroll) */
    z-index: 1;
    /* Stay on top */
    top: 50;
    /* Stay at the top */
    left: 0;
    background-color: #111;
    /* Black */
    overflow-x: hidden;
    /* Disable horizontal scroll */
    padding-top: 20px;
}

h3 {
    color: #818181;
}

/* The navigation menu links */
.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    /* display: block; */
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

/* Style page content */
.main {
    margin-left: 160px;
    /* Same as the width of the sidebar */
    padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }

    .sidenav a {
        font-size: 18px;
    }
}
</style>

<body>
    <div class="sidenav bg-dark">
        <h3><b>Categories</b></h3>
        <a href="./birthday.php">Birthday</a>
        <a href="./blank.php">Blank</a>
        <a href="./christmas.php">Christmas</a>
        <a href="./newyear.php">New Year</a>
        <a href="./quotes.php">Quotes</a>
        <a href="./randomlogo.php">RandomLogos</a><br>
        <a href="./simple.php">Simple</a><br>
        <a href="./thank.php">Thank You</a>
        <a href="./valentines.php">Valentines</a>
    </div>

    <!-- Page content -->
    <div class="main">

    </div>
</body>

</html>