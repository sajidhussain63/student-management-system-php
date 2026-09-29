<?php 
include 'conn.php';

$delid=$_GET['del_id'];

$sql="DELETE FROM student WHERE id = '$delid'";

$query=mysqli_query($conn,$sql);


header("Location:http://localhost/project1/admin/table.php");



?>