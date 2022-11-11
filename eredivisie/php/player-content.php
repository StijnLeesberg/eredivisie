<?php
    $sql = "SELECT playerName, playerImage, playerDescription, playerStatistics FROM hero WHERE playerId=$player"; // Sql command for data.
    $result = $conn->query($sql); 
    if (!$result->num_rows == 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h1>", $row["playerName"], "</h1>";
            echo "<h3>Omschrijving</h3>";
            echo "<p class=\"content-description\">", $row["playerDescription"], "</p>";
            echo "<h3>Eigenschappen</h3>";
            echo "<p class=\"content-statisticDesc\">Specialiteiten:<br />";
            echo "<p class=\"content-statistics\">", $row["playerStatistics"], "</p>";
            echo "<img src=\"", $row["playerImage"], "\" class=\"content-player-image\">";
        }
    }
    // If there were no results, show error.
    else {
        echo "<h3>Deze speler kan niet gevonden worden</h3>";
    }
?>