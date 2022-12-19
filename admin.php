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
    <title>Admin</title>
</head>
<body>
<!--//////////////////////////////////////////NAVBAR START////////////////////////////////////////-->
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);">
                        <i class="fa fa-television" aria-hidden="true"></i>
                        Monitoring
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        <i class="fa fa-database" aria-hidden="true"></i>
                        Database
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        Admin Database
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        MeshCentral
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<!--//////////////////////////////////////////NAVBAR END//////////////////////////////////////////-->
</body>
</html>