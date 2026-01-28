<!DOCTYPE HTML>
<html>  
<body>

<form action="tarea1.php" method="post">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "Jaime2759987";
$dbname = "tarea1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO nombres (nombre) VALUES ('" . $_POST["name"] . "')";

$conn->query($sql);

$conn->close();
?>

</body>
</html>