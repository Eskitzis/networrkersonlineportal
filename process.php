<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];

    //prevent injections
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    //$username = mysql_real_escape_string($username);
    //$password = mysql_real_escape_string($password);

    $con = mysqli_connect('v2202208181594198845.nicesrv.de', 'nassos', 'nassos1106', 'users');

    /*if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }
      echo "Connected successfully";
    */

    //Query the database for user
    $result = mysqli_query($con, "select * from networrkers where username = '$username' and password = '$password'") 
              or die("Failed to query database".mysql_error());
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);


    if ($row['role'] == "employee"){
        //echo "Login Success!!! Welcome ".$row['username']." ".$row['role'];
        header("Location: employee.php");
        //session_start();
    }
    if ($row['role'] == "teamleader"){
        //echo "Login Success!!! Welcome ".$row['username']." ".$row['role'];
        header("Location: teamleader.php");
        //session_start();
    }
    if ($row['role'] == "admin"){
        //echo "Login Success!!! Welcome ".$row['username']." ".$row['role'];
        header("Location: weekplan.html");
        //session_start();
    }
?>