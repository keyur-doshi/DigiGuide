<?php
session_start();
include('conn.php');
$user=$_POST['teacher-username'];
$pass=$_POST['teacher-password'];
$sql="select * from tlog where user='$user' and pwd='$pass'";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
    $_SESSION['leg']=$result['prof'];
    $_SESSION['checker']=2;
    header('location:dashbord.php');
}
else{
    // echo "<h1>Wrong credentials</h1>";
    header('location:teacherslogin.html');
}
?>
