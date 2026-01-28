<?php
//Guardo todo lo que me dijo Geeks for Geeks que necesitare para hacer la conexion en variables
$servername = "localhost";
$username = "root";
$password = "Jaime2759987";
$dbname = "tarea1";

//Creo una conexion a MySQL por medio de mysqli (Se que hay otra, pero no me acuerdo como se llama)
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Guardo en otra variable el query que voy a usar (El insert)
$sql = "INSERT INTO nombres (nombre) VALUES ('" . $_POST["name"] . "')";

//Usando la conexion, llamo el query ese
$conn->query($sql);

//Cierro la conexion, no estoy muy seguro por que (¿buena practica?)
$conn->close();
?>

<!DOCTYPE HTML>
<html>  
<body>

<h1>Todo perfecto<h1>

Click <a href="tarea1.php" class="button">AQUI</a> para volver

</body>
</html>