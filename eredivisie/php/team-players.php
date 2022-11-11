<?php
    $sql = "SELECT playerId, playerName, playerImage, playerDescription FROM hero WHERE teamId=$team"; // Sql command for data.
    $result = $conn->query($sql); 
    while($row = $result->fetch_assoc()) {
        echo "<div class=\"individual-player\">";
        echo  "<a href=\".?team=", $team, "&player=", $row["playerId"], "\">";
        echo   "<div class=\"individual-textfield\">";
        echo    "<h1>", $row['playerName'], "</h1>";
        echo    "<p class=\"individual-description\">", $row["playerDescription"], "</p>";
        echo    "<input type=\"button\" / class=\"individual-button\" value=\"More info\">";
        echo   "</div>";
        echo   "<img src=\"", $row["playerImage"], "\" />";
        echo  "</a>";
        echo "</div>";
    }
?>