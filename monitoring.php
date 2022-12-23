<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="styles/admin.css">
    <link rel="stylesheet" type="text/css" href="styles/monitoring.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="js/admin.js"></script>
    <title>Monitoring</title>
</head>
<body>
<!--//////////////////////////////////////////NAVBAR START////////////////////////////////////////-->
<div class="container-fluid px-0">
    <nav class="navbar navbar-expand-sm navbar-dark bg-black py-0 px-0">
        <a class="navbar-brand" href="javascript:history.back()"><img id="logo" src="https://peaceful-hypatia.185-207-107-69.plesk.page/images/logo.png"> &nbsp;&nbsp;&nbsp;Previous</a>
        <span class="v-line"></span>
        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="monitoring.php"><i class="fa fa-street-view" aria-hidden="true"></i> Thessaloniki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="katerini.php"><i class="fa fa-street-view" aria-hidden="true"></i> Katerini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kastoria.php"><i class="fa fa-street-view" aria-hidden="true"></i> Kastoria</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--//////////////////////////////////////////NAVBAR END//////////////////////////////////////////-->

<!--//////////////////////////////////////////THESSALONIKI MONITORING//////////////////////////////////////////-->
<div class="divrow">
    <div class="column">
        <table>
            <tr>
                <th>
                    <i class="fa fa-television" aria-hidden="true"></i>WORKSTATIONS
                </th>
                <th>
                    <i class="fa fa-television" aria-hidden="true"></i>LINKS
                </th>
            </tr>
            <tr>
                <td>
                    NW01
                </td>
                <td>
                    <button onclick="changeIframe('//http://94.70.133.115:8080/#/client/MQBjAHBvc3RncmVzcWw')">PREVIEW</button>
                    <button>FULL ACCESS</button>
                </td>
            </tr>
        </table>
    </div>

    <div class="column2 container">
        <iframe id="preview_monitoring" src="" frameborder="0" width="100%" height="700px" style="overflow:scroll;" scrolling="no"></iframe>
    </div>
</div>
<script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
<script type="text/javascript">
    function changeIframe(change) {
     document.getElementById('preview_monitoring').src = change;
    }
</script>
</body>
</html>