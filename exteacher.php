<?php 
session_start();
include('conn.php');
$v1=$_POST["venuex"];
$v2=$_POST["timex"];
$v3=$_POST["datex"];
$v4=$_POST["codex"];
$v6=$_SESSION['leg'];
$sql="select stream,subject from course_info where prof='{$_SESSION['leg']}' and code='{$v4}'";
$res=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($res);
$v7=$result['stream'];
$v5=$result['subject'];
$sql1="insert into extras(cname,prof,time,day,venue,code,stream) values ('$v5', '$v6', '$v2', '$v3', '$v1', '$v4', '$v7')";
$res1=mysqli_query($conn,$sql1);
if($res1)
{
$affectedRows = mysqli_affected_rows($conn);

if ($affectedRows > 0) {
    // The query was successful and at least one row was inserted
    header('location:successex.html');
} else {
    // No rows were inserted
    echo "<h1>No rows were inserted</h1>";
    header('location:exteachers.php');
}
} else {
// The query was not successful
echo "<h1>Wrong credentials</h1>";
header('location:exteachers.php');
}
 ?>