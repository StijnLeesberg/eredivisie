<?php
    $sql = "SELECT team.*, COUNT(hero.playerId) as \"playerCount\" FROM team NATURAL JOIN hero GROUP BY team.teamId"; // Sql command for data.
    $result = $conn->query($sql); 
    while($row = $result->fetch_assoc()) {
        echo "<li class=\"team-field\">";
        echo "<!-- Number of players in team is: ", $row["playerCount"], "-->";
        $linkPlayerId = $conn->query("SELECT playerId FROM hero WHERE teamId=" . $row["teamId"] . " LIMIT 1")->fetch_assoc(); // Get the first player in database that has current teamId, which will be used in link.
        echo  "<a class=\"team-field-hover\" href=\".?team=", $row["teamId"], "&player=", $linkPlayerId["playerId"], "\">";
        echo   "<div class=\"team-text\">";
        echo    "<h2>", $row["teamName"], "</h2>";
        echo    "<p class=\"team-description\">", $row["teamDescription"], "</p>";
        echo   "</div>";
        echo  "<img src=\"", $row["teamImage"], "\">";
        echo  "</a>";
        echo "</li>";
    }
?>