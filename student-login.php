<?php
session_start();
include('conn.php');
$user=$_POST['student-username'];
$pass=$_POST['student-password'];
$sql="select * from slog where user='$user' and pwd='$pass'";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
    $_SESSION['leg']=$result['stream'];
    $_SESSION['checker']=1;
    header('location:dashbord1.php');
}
else{
    echo "<h1>Wrong credentials</h1>";
    header('location:studentlogin.html');
}
?>
