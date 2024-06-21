<?php 
session_start();
include('conn.php');
if($_SESSION['checker']==1)
{
    header('location:assignments.php');
}
else{
    echo "<h1>Wrong credentials</h1>";
    header('location:assteachers.php');
}
 ?>