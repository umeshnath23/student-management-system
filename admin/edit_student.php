<?php
include("../includes/auth.php");
include("../config/database.php");

$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM students WHERE id=$id");

$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$course=$_POST['course'];

$sql="UPDATE students SET

name='$name',
email='$email',
phone='$phone',
gender='$gender',
course='$course'

WHERE id=$id";

if(mysqli_query($conn,$sql)){

header("Location: students.php");

}

}
?>

<!DOCTYPE html>

<html>

<head>

<title>Edit Student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">

<h3>Edit Student</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Name</label>

<input
type="text"
name="name"
value="<?= $row['name']; ?>"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
value="<?= $row['email']; ?>"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Phone</label>

<input
type="text"
name="phone"
value="<?= $row['phone']; ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Gender</label>

<select name="gender" class="form-control">

<option <?=($row['gender']=="Male")?"selected":"";?>>Male</option>

<option <?=($row['gender']=="Female")?"selected":"";?>>Female</option>

<option <?=($row['gender']=="Other")?"selected":"";?>>Other</option>

</select>

</div>

<div class="mb-3">

<label>Course</label>

<input
type="text"
name="course"
value="<?= $row['course']; ?>"
class="form-control">

</div>

<button
class="btn btn-warning"
name="update">

Update Student

</button>

<a href="students.php" class="btn btn-secondary">
Cancel
</a>

</form>

</div>

</div>

</div>

</body>

</html>