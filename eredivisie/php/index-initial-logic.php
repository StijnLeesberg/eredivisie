<?php
    $comment = "";
    $message = "";
    if (!isset($_GET["team"]) || !isset($_GET["player"])) {
        header("Location: .?team=1&player=1"); // Redirect user to default page.
    }
    else {
        $team = $_GET["team"]; // Get teamId.
        $player = $_GET["player"]; // Get playerId.
        $sql = "SELECT playerId FROM hero WHERE teamId=$team AND playerId=$player"; // Prepare sql statement.
        $result = $conn->query($sql); // Run sql statement.
        // If current gets results in no content, redirect user to default page.
        if ($result->num_rows == 0) {
            header("Location: .?team=1&player=1"); // Redirect user to default page.
        }
    }
    if(isset($_POST["submit"])) {
        $comment = strip_tags($_POST["comment"]);
        if ($comment != "" && isset($_POST["rating"])) {
            $stmt = $conn->prepare("INSERT INTO rating (ratingId, playerId, rating, ratingDate, ratingReview) VALUES (null, ?, ?, ?, ?)"); // Prepare sql statement, with sql protection.
            $stmt->bind_Param('ssss', $player, $_POST["rating"], time(), $comment); // Bind the parameters to the command.
            $stmt->execute(); // Execute command.
            header("Location: .?team=$team&player=$player"); 
        }
        else {
            $message = "Failed to comment! Your comment or rating was empty, please try again!"; // Set error message to be echoed on page.
        }
    }
?>