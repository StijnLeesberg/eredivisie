<?php
    echo "<h6>", $message, "</h6>"; //
    $rating = $conn->query("SELECT AVG(rating) as rating FROM rating WHERE playerId=$player")->fetch_assoc(); // Get the average rating of current player.
    $rating = $rating["rating"] / 2; //
    $rating = number_format((float)$rating, 2, '.', '');
    echo "<h5 id=\"h5-Rating\">Gemiddelde rating: ", $rating, "</h5>"; // Echo the rating.
    echo "<img id=\"img-rating\" src=\"images/star.png\">";
?>