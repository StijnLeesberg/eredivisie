<?php 
    // All of my variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eredivisie";
    $conn = new mysqli($servername, $username, $password, $dbname) or die ($conn->error); // Will give an error

   

    if(isset($_POST["submit"]))
    {
        if(!$conn)
        {
            die("Could not connect: " . mysqli_error());
        }
        else
        {
            $errors = [];
            $reviewText = $_POST["reviewText"];
            $reviewText = trim($reviewText);
            $reviewText = mysqli_real_escape_string($conn, $reviewText);
        }
        if(count($errors) == 0){
            //This inserts the information in to the database
            $query  = "INSERT INTO `reviews` (`reviewText`) VALUES ('$reviewText');";
            mysqli_query($conn, $query);
        }
    }
?>
