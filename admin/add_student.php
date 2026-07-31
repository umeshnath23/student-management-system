<?php
include("../includes/auth.php");
include("../config/database.php");

if(isset($_POST['save'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$course=$_POST['course'];

$sql="INSERT INTO students(name,email,phone,gender,course)
VALUES('$name','$email','$phone','$gender','$course')";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('Student Added Successfully');</script>";
}else{
    echo "<script>alert('Error');</script>";
}
}
?>

<!DOCTYPE html>

<html>

<head>

<title>Add Student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Add Student</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<div class="mb-3">
<label>Gender</label>

<select name="gender" class="form-control">

<option>Male</option>

<option>Female</option>

<option>Other</option>

</select>

</div>

<div class="mb-3">
<label>Course</label>
<input type="text" name="course" class="form-control">
</div>

<button class="btn btn-success" name="save">
Save Student
</button>

</form>

</div>

</div>

</div>

</body>

</html>