<?php 
session_start();
include('conn.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Libre+Baskerville&display=swap" rel="stylesheet">
    <title>College Timetable</title>
</head>
<style>
 

 
.container {
    display: flex;
    margin: 20px;
}

 
.sidebar {
    width: 200px;
    background-color: #333;
    color: #fff;
    padding: 20px;
}

.sidebar ul {
    list-style-type: none;
}

.sidebar li {
    margin: 10px 0;
}

.sidebar a {
    text-decoration: none;
    color: #fff;
}

/* Style the timetable */
.timetable {
    flex: 1;
    padding: 20px;
}

/* Customize the timetable's appearance as per your requirements */
.timetable {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
 
  body {
    font-family: 'Caveat', cursive;
font-family: 'Libre Baskerville', serif;
    /* background-image: linear-gradient(to right, rgb(168, 226, 223),white,rgb(168, 226, 223)); */
    background-color: #dad7cd;
    margin: 0;
    padding: 0;
  }

  header {
    background-color: #a3b18a;
    color: #434244;
    text-align: center;
    padding: 20px;
    font-weight: bolder;
  }

  .container {
        display: flex;
        gap: 20px;
        margin: 20px;
        height: 80vh;
    }

    .sidebar {
        width: 20vw;
        background-color: #a3b18a;
        border-radius: 10px;
        color: #434244;
        padding: 20px;
        height: 100%;
        font-weight: 550;
    }

    .sidebar ul {
        list-style-type: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        margin-top: 110px;
    }

    .sidebar li {
        /* margin: 10px 0; */
        /* display: inline-block; */
        text-align: center;
        width:250px;
        border: 5px solid #3a5a40; /* Border color */
    border-radius: 25px; /* Optional: Adds rounded corners */
    padding: 7px; /* Optional: Adds some padding for better visual appearance */
    }

    .sidebar a {
        text-decoration: none;
        color: #fff;
        font-size: 25px;
        text-align: center;
    }

    .sidebar a:hover{
        color: #434244;
    }

    .timetable {
        flex: 1;
        padding: 40px;
        margin-top: 0px;
        height: 100%;
        width:100%;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
   
    /* Add any specific styling for your timetable here */
    table {
        width: 70vw;
        height:100%;
        margin-top: 0;
    }

    table, th, td {
        border-collapse: collapse;
        border: 1px solid #ccc;
    }

    th, td {
        padding: 11px;
        text-align: center;
    }

    th {
        background-color: #a3b18a;
        color: #fff;
        font-weight: 500;
        font-size: 25px;
    }

    td {
        background-color: #dad7cd;
        color: #434244;
        font-weight: 500;
        font-size: 20px;
    }

  /* title image */

  #title{
    margin-bottom: 270px;
  }

  .title-image {
    width: 35%;
    position: absolute;
    margin-left: 190px;


  }

  .det{
    text-align: center;
    margin-top: 200px;
  }
footer{
  background-color: #3a5a40;
  margin-bottom: 0;
  padding-bottom: 0;
}
footer .nav-link {
  color: white !important;
}
 
#header-content {
    display: flex;
    align-items: center;
    justify-content: center;

  }
 
.h{
    display: flex;
    gap: 35px;
}
.h .logo{
    margin-right: 350px;
}
.header-text h1 {
    font-size: 4rem; /* Adjust the size for "Welcome to DigiGuide" */
  }

  .header-text p {
    font-size: 2rem; /* Adjust the size for "Your College Scheduler" */
  }

.navbar{
    padding-left: 510px;
     
     
}
.nav-item{
    padding-left: 30px;
    padding-right: 30px;
}
.nl{
    color: white;
    font-size: 25px;
}
#logo{
    border-radius: 10px;
}
#title-text{
    color:  #3a5a40;
    font-weight: bold;
}

/* Add any specific styling for your timetable here */
</style>
<body>
    <header>
        <div class="h">
        <div class="logo">
         <img  src="./images/WhatsApp Image 2023-10-25 at 00.34.17.jpeg" height="130px" width="130px"  id="logo" >
       </div><div class="header-text"> <h1>Welcome to DigiGuide</h1>
        <p>Your College Scheduler</p>
        </div>
        </div>
      </header>
      
    
      <nav class="navbar navbar-expand-lg" style="background-color: #3a5a40">
        <div class="container-fluid">
          <!-- <a class="nl navbar-brand" href="#">Home</a> -->
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class=" nav-item">
                <a class="nl nav-link " aria-current="page" href="#">Home</a>
              </li>
              <li class=" nav-item">
                <a class="nl nav-link " aria-current="page" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nl nav-link" href="#">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nl nav-link" href="index.html">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="assteachers.php">Assignments</a></li>
                <li><a href="exteachers.php">Extra Class Scheduler</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Announcements</a></li>
                <li><a href="#">Attendance</a></li>
                <li><a href="#">Discussion</a></li>
            </ul>
        </div>
        <div class="timetable" id="t2">
            <!-- <div class="timetable"> -->
                <table>
                    <thead>
                        <tr>
                            <th>Time\Day</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td>9:00 AM - 10:00 AM</td> -->
                            <td style="background-color: #a3b18a;">9:00 AM - 10:00 AM</td>
                            <?php
                            // include('conn.php');
                            $i=0;
                            $dayss=array("Monday","Tuesday","Wednesday","Thursday","Friday");
                            for($i=0;$i<5;$i++)
                            {
                                $sql="select cname,venue from courses where time='9:00AM-10:00AM' AND courses.day='{$dayss[$i]}' AND (stream='{$_SESSION['leg']}' OR prof='{$_SESSION['leg']}')";
                                $res=mysqli_query($conn,$sql);
                                if($result=mysqli_fetch_assoc($res))
                                {
                                    echo '<td>'.$result['cname'].'<br/>'.$result['venue'].'</td>';
                                }
                                else 
                                {
                                    echo '<td>-/-</td>';
                                }
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #a3b18a;">10:00 AM - 11:00 AM</td>
                            <?php
                            // include('conn.php');
                            $i=0;
                            $dayss=array("Monday","Tuesday","Wednesday","Thursday","Friday");
                            for($i=0;$i<5;$i++)
                            {
                                $sql="select cname,venue from courses where time='10:00AM-11:00AM' AND courses.day='{$dayss[$i]}' AND (stream='{$_SESSION['leg']}' OR prof='{$_SESSION['leg']}')";
                                $res=mysqli_query($conn,$sql);
                                if($result=mysqli_fetch_assoc($res))
                                {
                                    echo '<td>'.$result['cname'].'<br/>'.$result['venue'].'</td>';
                                }
                                else 
                                {
                                    echo '<td>-/-</td>';
                                }
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #a3b18a;">11:00 AM - 12:00 PM</td>
                            <?php
                            // include('conn.php');
                            $i=0;
                            $dayss=array("Monday","Tuesday","Wednesday","Thursday","Friday");
                            for($i=0;$i<5;$i++)
                            {
                                $sql="select cname,venue from courses where time='11:00AM-12:00PM' AND courses.day='{$dayss[$i]}' AND (stream='{$_SESSION['leg']}' OR prof='{$_SESSION['leg']}')";
                                $res=mysqli_query($conn,$sql);
                                if($result=mysqli_fetch_assoc($res))
                                {
                                    echo '<td>'.$result['cname'].'<br/>'.$result['venue'].'</td>';
                                }
                                else 
                                {
                                    echo '<td>-/-</td>';
                                }
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #a3b18a;">12:00 PM - 2:00 PM</td>
                            <td style="background-color: #3a5a40; color: white;"colspan="5">Lunch Break</td>
                        </tr>
                        <tr>
                            <td style="background-color: #a3b18a;">2:00 PM - 3:00 PM</td>
                            <?php
                            // include('conn.php');
                            $i=0;
                            $dayss=array("Monday","Tuesday","Wednesday","Thursday","Friday");
                            for($i=0;$i<5;$i++)
                            {
                                $sql="select cname,venue from courses where time='2:00PM-3:00PM' AND courses.day='{$dayss[$i]}' AND (stream='{$_SESSION['leg']}' OR prof='{$_SESSION['leg']}')";
                                $res=mysqli_query($conn,$sql);
                                if($result=mysqli_fetch_assoc($res))
                                {
                                    echo '<td>'.$result['cname'].'<br/>'.$result['venue'].'</td>';
                                }
                                else 
                                {
                                    echo '<td>-/-</td>';
                                }
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #a3b18a;">3:00 PM - 4:00 PM</td>
                            <?php
                            // include('conn.php');
                            $i=0;
                            $dayss=array("Monday","Tuesday","Wednesday","Thursday","Friday");
                            for($i=0;$i<5;$i++)
                            {
                                $sql="select cname,venue from courses where time='3:00PM-4:00PM' AND courses.day='{$dayss[$i]}' AND (stream='{$_SESSION['leg']}' OR prof='{$_SESSION['leg']}')";
                                $res=mysqli_query($conn,$sql);
                                if($result=mysqli_fetch_assoc($res))
                                {
                                    echo '<td>'.$result['cname'].'<br/>'.$result['venue'].'</td>';
                                }
                                else 
                                {
                                    echo '<td>-/-</td>';
                                }
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            
            <?php
        $ssql = "select * from extras where prof='{$_SESSION['leg']}' and day>=CURDATE()";
        $extraRes = mysqli_query($conn, $ssql);
        if (mysqli_num_rows($extraRes) > 0)
        {
            echo '<br/><center><h2>Extra Classes</h2></center>
            <table style="display: inline-table; max-height: 100px; overflow-y: auto; margin-bottom: 20px;">
    <thead>
        <tr>
            <th>Subject</th>
            <th>Venue</th>
            <th>Time</th>
            <th>Day</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>';

        while ($extraResult = mysqli_fetch_assoc($extraRes)) {
            echo "<tr>";
            echo "<td>{$extraResult['cname']}</td>";
            echo "<td>{$extraResult['venue']}</td>";
            echo "<td>{$extraResult['time']}</td>";
            echo "<td>{$extraResult['day']}</td>";
            // Add more cells as needed
            echo "</tr>";
        }
    }
    echo '</tbody>
</table>';
        ?>
        <!-- </div> -->
        </div>
    </div>
    <!-- <footer class="py-3 foot">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted nav-link ">© 2022 Company, Inc</p>
      </footer> -->
</body>
</html>