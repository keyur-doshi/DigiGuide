<?php 
session_start();
include('conn.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Assignment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Libre+Baskerville&display=swap" rel="stylesheet">
  
  <style>
   
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

  .carousel-item img {
    height: 470px;
    border-radius: 20px;
  }

  .carousel {
    margin: 2% 5%;
  }

  .download-button {
    margin: 5% 3% 5% 0;
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
     justify-content: center;
   gap:  10px; 
     

}
.h .logo{
    margin-right: 350px;
}
.navbar{
     padding-left: 400px;
     
     
}
.nav-item{
    padding-left: 30px;
    padding-right: 30px;
}
.nl{
    color: white;
}
#logo{
    border-radius: 10px;
}
#title-text{
    color:  #3a5a40;
    font-weight: bold;
}
 

    h1 {
      text-align: center;
      color: #333;
    }
    #logo{
    border-radius: 10px;
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

    main {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 28px;
      text-align: center;
      margin-bottom: 20px;
    }

    form div {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }

    textarea {
      height: 100px;
      resize: vertical;
    }

    button[type="submit"] {
      background-color: #333;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
       
    }
    #btn{
        text-align: center;
    }


    button[type="submit"]:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
    <!-- <header>
        <div class="h">
          <div class="logo">
            <img src="./images/WhatsApp Image 2023-10-25 at 00.34.17.jpeg"  height="90px" width="90px" id="logo">
          </div>
          <div class="header-text">
            <h1>Welcome to DigiGuide</h1>
            <p>Your College Scheduler</p>
          </div>
        </div>
      </header>
    
      <nav class="navbar navbar-expand-lg" style="background-color: #3a5a40">
        <div class="container-fluid">
          <a class="nl navbar-brand" href="#">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class=" nav-item">
                <a class="nl nav-link " aria-current="page" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nl nav-link" href="#">Contact us</a>
              </li>
               <li class="nl nav-item dropdown">
                <a class="nl nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="nl dropdown-menu">
                  <li><a class=" dropdown-item" href="./teacherslogin.html">Teacher's Login</a></li>
                  <li><a class="dropdown-item" href="./studentlogin.html">Student Login</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li> 
                 
                </ul>
              </li>
              
            </ul>
          </div>
        </div>
      </nav> -->
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
                <a class="nl nav-link " aria-current="page" href="dashbord.php">Home</a>
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
  <main>

    <h1>Schedule Extra Class</h1>
    <form id="assignmentForm" action="http://localhost/dbms/exteacher.php" method="POST">
      <div>
        <label for="assignmentName">Venue:</label>
        <input type="text" id="assignmentName" name="venuex" required>
      </div>

      <div>
        <label for="assignmentName">Time:</label>
        <input type="text" id="assignmentName" name="timex" required>
      </div>

      <div>
        <label for="dueDate">Date:</label>
        <input type="date" id="dueDate" name="datex" required>
      </div>
      <div>


        <label for="courseCode">Course Code:</label>
        <?php
        $sql="select distinct code from course_info where prof='{$_SESSION['leg']}'";
        $res=mysqli_query($conn,$sql);
        $resultArray = array();
        if($res)
        {
        while($result=mysqli_fetch_assoc($res))
        {
          $resultArray[] = $result;
        };
      }
      else {
        $resultArray[]="No Current Course";
      }
        ?>
        <select id="courseCode" name="codex" required>
          <!-- <option value="course1">Course 1</option>
          <option value="course2">Course 2</option>
          <option value="course3">Course 3</option> -->
          <?php foreach ($resultArray as $row) {
            $code = $row['code'];
    echo "<option value=\"$code\">$code</option>";
} ?>
        </select>
      </div>
      <div id="btn">
        <input type="submit" value="Schedule"/>
      </div>
    </form>
  </main>




  <footer class="py-3 foot">
    <!-- Footer content -->
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted nav-link">© 2022 Company, Inc</p>
  </footer>

  <!-- <script>
        document.getElementById('assignmentForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevents default form submission
      
      // Get form values
      const assignmentName = document.getElementById('assignmentName').value;
      const dueDate = document.getElementById('dueDate').value;
      const courseCode = document.getElementById('courseCode').value;
      const courseName = document.getElementById('courseName').value;
      const topicsDescription = document.getElementById('topicsDescription').value;

      // Create an object with the form data
      const assignmentData = {
        name: assignmentName,
        submissionDate: dueDate,
        courseCode: courseCode,
        courseName: courseName,
        topicsDescription: topicsDescription
        // Add more properties as needed
      };

      // You can now perform actions with this data
      console.log('New Assignment:', assignmentData);
      
      // For demo purposes, you might want to send this data to a server using fetch or an API

      // Clear the form after submission
      document.getElementById('assignmentForm').reset();
    });
  </script> -->
</body>
</html>
