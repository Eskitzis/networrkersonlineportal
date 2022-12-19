<?php
    //values passed from index form
    $username = $_POST['user'];
    $password = $_POST['pass'];

    //prevent injections
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $con = mysqli_connect('v2202208181594198845.nicesrv.de', 'nassos', 'nassos1106', 'users');

    //Query the database for user
    $result = mysqli_query($con, "select * from networrkers where username = '$username' and password = '$password'") 
              or die("Failed to query database".mysql_error());
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);

    if ($row['username'] == $username && $row['password'] == $password && $row['role'] == "employee"){
        //echo "Login Success!!! Welcome ".$row['username']." ".$row['role'];
        session_start();
        header("Location: employee.php");
        $_SESSION['fname'] = $row['fullname'];
        $_SESSION['url'] = $row['caldav'];
        //$_SESSION['sk'] = $row['skill'];
    }

    if ($row['username'] == $username && $row['password'] == $password && $row['role'] == "teamleader"){
        //echo "Login Success!!! Welcome ".$row['username']." ".$row['role'];
        session_start();
        header("Location: teamleader.php");
        $_SESSION['fname'] = $row['fullname'];
        $_SESSION['url'] = $row['caldav'];
        //$_SESSION['sk'] = $row['skill'];
    }

    if ($row['username'] == $username && $row['password'] == $password && $row['role'] == "admin"){
        //echo "Login Success!!! Welcome ".$row['username']." ".$row['role'];
        session_start();
        header("Location: admin.php");
        $_SESSION['fname'] = $row['fullname'];
        $_SESSION['url'] = $row['caldav'];
        //$_SESSION['sk'] = $row['skill'];
    }
?>