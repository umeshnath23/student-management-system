<?php
include("../includes/auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
}

.sidebar{
    width:250px;
    min-height:100vh;
    background:#212529;
}

.sidebar a{
    color:white;
    text-decoration:none;
    display:block;
    padding:15px;
}

.sidebar a:hover{
    background:#0d6efd;
}

.card{
    border:none;
    border-radius:10px;
}

</style>

</head>

<body>

<div class="d-flex">

<div class="sidebar">

<h3 class="text-white text-center p-3">
SMS
</h3>

<a href="dashboard.php">Dashboard</a>
<a href="add_student.php">Add Student</a>
<a href="students.php">View Students</a>
<a href="#">Courses</a>
<a href="logout.php">Logout</a>

</div>

<div class="container-fluid p-4">

<h2>Welcome, <?php echo $_SESSION['admin']; ?></h2>

<div class="row mt-4">

<div class="col-md-4">

<div class="card bg-primary text-white">

<div class="card-body">

<h5>Total Students</h5>

<h1>0</h1>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card bg-success text-white">

<div class="card-body">

<h5>Total Courses</h5>

<h1>0</h1>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card bg-warning text-dark">

<div class="card-body">

<h5>Admins</h5>

<h1>1</h1>

</div>

</div>

</div>

</div>

</div>

</div>

</body>
</html>