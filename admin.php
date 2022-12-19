<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://peaceful-hypatia.185-207-107-69.plesk.page/images/logo.png">
	<link rel="stylesheet" type="text/css" href="styles/admin.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <script src="js/admin.js"></script>
    <title>Admin</title>
</head>
<body>
<!--//////////////////////////////////////////NAVBAR START////////////////////////////////////////-->
<div class="container-fluid px-0">
    <nav class="navbar navbar-expand-sm navbar-dark bg-black py-0 px-0">
        <a class="navbar-brand" href="#"><img id="logo" src="https://peaceful-hypatia.185-207-107-69.plesk.page/images/logo.png"> &nbsp;&nbsp;&nbsp;Dashboard</a>
        <span class="v-line"></span>
        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-television" aria-hidden="true"></i>Monitoring</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-database" aria-hidden="true"></i>Database</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-users" aria-hidden="true"></i>Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-server" aria-hidden="true"></i>MeshCentral</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--//////////////////////////////////////////NAVBAR END//////////////////////////////////////////-->

</body>
</html>