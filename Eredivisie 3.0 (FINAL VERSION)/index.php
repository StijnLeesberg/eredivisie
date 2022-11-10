<?php
    include "php/database.php"; 
    include "php/index-initial-logic.php";
?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }
// ?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"> <!-- Character set. -->
        <meta name="Eredivisie"> <!-- Website description for search index. -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- Links main stylesheet for formatting etc. -->
        <title>Eredivisie</title> <!-- Tab hover name. -->
        <link rel="shortcut icon" href="images/favicon/favicon.png">
    </head>
    <body>
        <header class="main-header">
            <a href="http://localhost/eredivisie/?team=1">
                <img src="images/eredivisie-logo.png" />
            </a>
            <div id="contact-knop">
                <a href="contact/contact.php">Contactinformatie</a>
                <a href="login/login.php">Login</a>
                <a href="login/logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
            </div>
            <!-- // // When the user clicks on div, open the popup
            // function myFunction() {
            // var popup = document.getElementById("myPopup");
            // popup.classList.toggle("show");
            // } -->
        </header>
        <nav id="team-select">
            <h1>Selecteer hieronder een team</h1>
            <ul>
                <?php include "php/teams.php";?>
            </ul>
        </nav>
        <div id="individual-select">
            <?php include "php/team-players.php";?>
        </div>
        <div id="individual-content">
            <?php include "php/player-content.php";?>
            <?php
            if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false)
            {
                // not logged in
            }
            elseif($_SESSION['loggedIn'] == true)
            {
                // logged in, so show form
                ?>
                <form method="post">
                    <div id="content-vote">
                        <h3>Laat een review & reactie achter!</h3>
                        <?php include "php/player-ratingAvg.php" ?>
                        <div class="rate">
                            <input type="radio" id="rating10" name="rating" value="10" /><label class="lblRating" for="rating10" title="5 stars"></label>
                            <input type="radio" id="rating9" name="rating" value="9" /><label class="lblRating half" for="rating9" title="4 1/2 stars"></label>
                            <input type="radio" id="rating8" name="rating" value="8" /><label class="lblRating" for="rating8" title="4 stars"></label>
                            <input type="radio" id="rating7" name="rating" value="7" /><label class="lblRating half" for="rating7" title="3 1/2 stars"></label>
                            <input type="radio" id="rating6" name="rating" value="6" /><label class="lblRating" for="rating6" title="3 stars"></label>
                            <input type="radio" id="rating5" name="rating" value="5" /><label class="lblRating half" for="rating5" title="2 1/2 stars"></label>
                            <input type="radio" id="rating4" name="rating" value="4" /><label class="lblRating" for="rating4" title="2 stars"></label>
                            <input type="radio" id="rating3" name="rating" value="3" /><label class="lblRating half" for="rating3" title="1 1/2 stars"></label>
                            <input type="radio" id="rating2" name="rating" value="2" /><label class="lblRating" for="rating2" title="1 star"></label>
                            <input type="radio" id="rating1" name="rating" value="1" /><label class="lblRating half" for="rating1" title="1/2 star"></label>
                            <input type="radio" id="rating0" name="rating" value="0" /><label class="lblRating" for="rating0" title="No star"></label>
                        </div>
                        <div class="clearDiv"></div>
                    </div>
                    <div class="clearDiv"></div>
                    <div id="content-comment">
                        <h3>Plaats review</h3>
                        <textarea rows="10" cols="60" maxlength="500" name="comment" id="content-commentInput" placeholder="Laat je review hier achter"><?php echo $comment; // Echo comment back if rating failed. ?></textarea>
                        <input type="submit" name="submit" value="Post comment" id="content-commentButton">
                    </div>
                </form>
                <?php
            }
            ?>
            <div class="clearDiv"></div>
            <h3>Reviews</h3>
            <?php include "php/player-comments.php"; ?>
            <div class="clearDiv2"></div>
        </div>,
    </body>
</html>