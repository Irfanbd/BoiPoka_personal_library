<?php
$b_name=$_POST['bname'];
$w_name=$_POST['wname'];
$genre=$_POST['genre'];

$conn=mysqli_connect("localhost","root","","crud") or die("Connection Faild");
$sql="INSERT INTO boipoka(bname,wname,genre)VALUES('{$b_name}','{$w_name}','{$genre}')";
$result=mysqli_query($conn,$sql) or die("Unsuccessful Query");
header("Location:http://localhost/boipoka_personal_library/index.php");
mysqli_close($conn);
?>