<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #4262f4;
    overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
}

/* Change color on hover */
.sidenav a:hover {
    background-color: white;
    color: black;
}

/* Style the content */
.content {
    margin-left: 200px;
    padding-left: 20px;
}
</style>
</head>
<body>

<div class="sidenav">
  <a style="background-color:white;color:#4262f4;border-right:1px solid #4262f4">Admin Panel</a>
  <a href="">Home</a>
  <a href="">&#10004; &nbsp; View Schedules</a>
  <a href="#">&#10004; &nbsp; Manage Routes</a>
  <a href="#">&#10004; &nbsp; Manage Buses</a>
  <a href="#">&#10004; &nbsp; Manage Gallery</a>
</div>

<div class="content">
  <h2>CSS Template</h2>
  <p>A full-height, fixed sidenav and content.</p>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #4262f4;
    overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
}

/* Change color on hover */
.sidenav a:hover {
    background-color: white;
    color: black;
}

/* Style the content */
.content {
    margin-left: 200px;
    padding-left: 20px;
}
</style>
</head>
<body>

<div class="sidenav">
  <a style="background-color:white;color:#4262f4;border-right:1px solid #4262f4">Admin Panel</a>
  <a href="home.php">Home</a>
  <a href="viewSchedule.php">&#10004; &nbsp; View Schedules</a>
  <a href="#">&#10004; &nbsp; Add Bus</a>
  <a href="#">&#10004; &nbsp; Add Route</a>
  <a href="#">&#10004; &nbsp; Cancel Bus</a>
  <a href="#">&#10004; &nbsp; Cancel Route</a>
  <a href="#">&#10004; &nbsp; Add to Gallery</a>
</div>

<div class="content">
  <h2>CSS Template</h2>
  <p>A full-height, fixed sidenav and content.</p>
</div>

</body>
</html>
