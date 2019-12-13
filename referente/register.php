<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "municipio";
$nombre =$_POST["nombre"];
$apellido = $_POST["apellido"];
$tipo = $_POST["tipo"];
$email = $_POST["email"];
$pass = $_POST["password"];
// Create connection
$hash=password_hash($pass, PASSWORD_DEFAULT);
$conn = new mysqli($servername,$username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (nombre, apellido, email, idtipousuario, password )
VALUES ('". $nombre ."','". $apellido . "','". $email . "','". $tipo . "','". $hash . "')";

if ($conn->query($sql) === TRUE) {
  echo '
    <center>
    <h1>Usuario creado correctamente</h1>

 <p><a href="../administrador/"><div class="contbtn">
      <button  type="submit" class="btn" id="btningresar"  autofocus>
          Aceptar
      </button>
</center>
  </div></a></p></div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
