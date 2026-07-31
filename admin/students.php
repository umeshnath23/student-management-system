<?php
include("../includes/auth.php");
include("../config/database.php");

$result = mysqli_query($conn,"SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
<title>Students</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Students List</h2>

<a href="add_student.php" class="btn btn-success mb-3">
Add Student
</a>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Gender</th>
<th>Course</th>
<th>Action</th>

</tr>

</thead>

<tbody>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= $row['name']; ?></td>

<td><?= $row['email']; ?></td>

<td><?= $row['phone']; ?></td>

<td><?= $row['gender']; ?></td>

<td><?= $row['course']; ?></td>

<td>

<a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
Edit
</a>

<a href="delete_student.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure you want to delete this student?');">

Delete

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>
</html>