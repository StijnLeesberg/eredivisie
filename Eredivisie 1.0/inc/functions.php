<?php 
// this function is the database connection
function dBconnect()
{
    // these are my database connection
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "eredivisie";
    $conn       = new mysqli($servername, $username, $password, $dbname) or die ($conn->error); // will give a error

    return $conn;
}

// with this function you can select the teams from the database
function getTeams()
{
    $conn = dBconnect();
    // defines an empty array to store teams
    $teams = array();

    // defines the query to fetch data from the database
    $getTeamsSQL = "
    SELECT * FROM `teams` ORDER BY `teamName` ASC
    ";

    // performs $query on $conn and store resource
    $resource = mysqli_query($conn, $getTeamsSQL) or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($resource))
    {
        // add new items to $teams
        $teams[] = $row;
    }

    // returns the teams
    return $teams;
}

// with this function you can select the characters from the database
function getCharacters($teamId = false)
{
    $conn = dBconnect();

    // define an empty array to store characters
    $characters = array();

    if(!$teamId)
    {
        // define the query to fetch data from the database
        $getCharactersSQL = "
        SELECT * FROM `characters` ORDER BY `characterId` ASC
        ";
    }
    else
    {
        // define the query to fetch data from the database
        $getCharactersSQL = "
        SELECT * FROM `characters` WHERE `teamId` = " . $teamId . "  ORDER BY `characterId` ASC
        ";
    }

    // perform $query on $conn and store resource
    $resource = mysqli_query($conn, $getCharactersSQL) or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($resource))
    {
        // add new items to $teams
        $characters[] = $row;
    }

    // returns the characters
    return $characters;
}

// with this function you can select each character
function getCharacter( $characterId = false)
{
    $conn = dBconnect();

    // define an empty array to store characters
    $heroes = array();

    $getCharacterSQL = "
    SELECT * FROM `characters`
    ";

    if($characterId)
    {
        // define the query to fetch data from the database
        $getCharacterSQL = "
        SELECT * FROM `characters` WHERE `characterId` = " . $characterId;

    }
    else
    {
        // define the query to fetch data from the database
        $getCharacterSQL = "
        SELECT * FROM `characters` ORDER BY RAND() LIMIT 1
        ";
    }

    // perform $query on $conn and store resource
    $resource = mysqli_query($conn, $getCharacterSQL) or die(mysqli_error($conn));

    $heroes = mysqli_fetch_assoc($resource);

    // returns the characters
    return $heroes;
}

// with this function you can select all powers for each character
function getPowers($characterId = false)
{
    $conn = dBconnect();

    // define an empty array to store characters
    $playerPowers = array();

    $getPowersSQL = "
    SELECT * FROM `characterproperties`, `properties`";

    if($characterId)
    {
        // define the query to fetch data from the database
        $getPowersSQL = "
        SELECT `propertyText` FROM `characterproperties` pl INNER JOIN `properties` pr ON pl.propertyId = pr.propertyId WHERE `characterId` = " . $characterId . " ";
    }

    // perform $query on $conn and store resource
    $resource = mysqli_query($conn, $getPowersSQL) or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($resource))
    {
        // add new items to $teams
        $playerPowers[] = $row;
    }

    return $playerPowers;
}

// this is the dump
function myDump($myVar)
{
        echo "<pre>";
        var_dump($myVar);
        echo "</pre>";

        if($exit)
        {
            die("Done dumping");
        }
}