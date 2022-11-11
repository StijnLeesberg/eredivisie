<?php
    include "../php/database.php"; 
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"> <!-- Character set. -->
        <meta name="Eredivisie"> <!-- Website description for search index. -->
        <link rel="stylesheet" type="text/css" href="../css/style.css"> <!-- Links main stylesheet for formatting etc. -->
        <title>Eredivisie</title> <!-- Tab hover name. -->
        <link rel="shortcut icon" href="../images/favicon/favicon.png">
    </head>
    <body>
        <!-- <header class="main-header">
            <a href="http://localhost/eredivisie/?team=1">
                <img src="../images/eredivisie-logo.png" />
            </a>
        </header> -->
        <div id="header-image">
            <img src="../images/header.png" />
        </div>    
        <div id="contact-info">
            <h1>Website gemaakt door Stijn Leesberg</h1>
            <h1>IC19.AO.E - 84098@roc-teraa.nl</h1>
            <h1>Bij vragen/opmerkingen stuur een email!</h1>
            <input type="button" class="button-home" onclick="location.href='../index.php'" value="Terug naar applicatie" />
        </div>
    </body>
</html>