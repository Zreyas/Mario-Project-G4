<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$db="mario";

$conn = new mysqli($servername, $username, $password,$db);
$user=$_POST["user"];
$pass=$_POST["pass"];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = " SELECT * from log where user=".$user." and pass=".$pass."";
$sql = "SELECT * from log where user='".$user."' and pass='".$pass."' ";
$result = mysqli_query($conn, $sql);

// Associative array
$row = mysqli_fetch_assoc($result);
if($result->num_rows >0)
{
    header("Location: mario.html");
}
else{
    echo "<h1>wrong credentials</h1>";
}




// Free result set
mysqli_free_result($result);

mysqli_close($conn);

?>
</body>
</html>
