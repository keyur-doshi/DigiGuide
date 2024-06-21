<?php 
session_start();
include('conn.php');
$v1=$_POST["namez"];
$v2=$_POST["datez"];
$v3=$_POST["codez"];
$v4=$_POST["descz"];
$v5=$_POST["gform"];
$v6=$_SESSION['leg'];
$sql="select stream from course_info where prof='{$_SESSION['leg']}' and code='{$v3}'";
$res=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($res);
$v7=$result['stream'];
$sql1="insert into assignments(course_code,due_date,assignment_name,description,gform,prof,stream) values ('$v3', '$v2', '$v1', '$v4', '$v5', '$v6', '$v7')";
$res1=mysqli_query($conn,$sql1);
if($res1)
{
$affectedRows = mysqli_affected_rows($conn);

if ($affectedRows > 0) {
    // The query was successful and at least one row was inserted
    header('location:success.html');
} else {
    // No rows were inserted
    echo "<h1>No rows were inserted</h1>";
    header('location:assteachers.php');
}
} else {
// The query was not successful
echo "<h1>Wrong credentials</h1>";
header('location:assteachers.php');
}
 ?>