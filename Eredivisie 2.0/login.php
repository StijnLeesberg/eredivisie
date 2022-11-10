<!-- Database include -->
<?php include('inc/logindatabase.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Eredivisie">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="author" content="Stijn LEesberg">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<title>Eredivisie - Homepage</title>
</head>
<body>
    <!-- Main container -->
    <div class="main-container">
        <div class="form-container">
            <form method="POST">
            <div class="banner">‎‎ </div>
                <div class="input-container">
                    <!-- All of the inputs -->
                    <li><input type="username" name="userName" placeholder=" Username"></li>
                    <li><input type="password" name="userPass" placeholder=" Password"></li>
                    <input type="submit" name="submit" value="LOG IN" id="login-button">
                    <input type="reset" name="reset_data" value="RESET">
                </div>
            </form>
        </div>
        <!-- Return button -->
        <div class=return-button-container><button class="return-button" onclick="location.href='index.php';">Terug naar homepagina</button></div>
        <?php include 'inc/footer.php';?>
    </div>
</body>
</html>