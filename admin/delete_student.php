<?php
include("../includes/auth.php");
include("../config/database.php");

if(isset($_GET['id'])){

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM students WHERE id='$id'");

header("Location: students.php");

}
?>