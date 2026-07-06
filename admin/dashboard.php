<?php
include("../includes/auth.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-success text-white">
<h3>Dashboard</h3>
</div>

<div class="card-body">

<h4>Welcome, <?php echo $_SESSION['admin']; ?> 👋</h4>

<p>You have successfully logged in.</p>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>

</div>

</div>

</body>
</html>