<?php
    $sql = "SELECT ratingReview, rating, ratingDate, ratingId FROM rating WHERE playerId=\"$player\""; // Sql command to select data.
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "<h5>Er zijn nog geen reviews geschreven</h5>";
    }
    while($row = $result->fetch_assoc()) {
        $comment = trim(preg_replace('/\s+/', ' ', $row["ratingReview"])); // Removes enters from string and replaces it with whitespace.
        echo "<div class=\"content-comments\">";
        echo  "<h4>Anoniem ", date('m/d/Y H:i:s', $row["ratingDate"]), " ID:", $row["ratingId"], " Rating: ", $row["rating"] / 2, "</h4>";
        echo "<img src=\"images/star.png\">";
        echo "<div class=\"clearDiv\"></div>";
        echo  "<p>", $comment, "</p>";
        echo "</div>";
    }
?>