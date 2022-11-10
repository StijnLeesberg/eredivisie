<!-- Database include -->
<?php
// All of my variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eredivisie";
$conn = new mysqli($servername, $username, $password, $dbname) or die ($conn->error); // Will give an error

if(isset($_POST["submit"])) {
    $userName = $_POST["userName"];
    $userName = trim($userName);
    $userName = mysqli_real_escape_string($conn, $userName);
   
    $userPass = $_POST["userPass"];
    $userPass = sha1($userPass);
    $userPass = trim($userPass);
    $userPass = mysqli_real_escape_string($conn, $userPass);
    
    $query = "SELECT userId FROM users where userName = '$userName' and userPass = '$userPass'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if($count === 1) {
        header("Location:index.php");
    }
    else {
        echo "Wrong username or password";
    }
}
?>