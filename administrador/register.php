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
$checkEmail = "SELECT * FROM usuarios WHERE email = '$_POST[email]' ";

// Variable $result hold the connection data and the query
$result = $conn-> query($checkEmail);

// Variable $count hold the result of the query
$count = mysqli_num_rows($result);

// If count == 1 that means the email is already on the database
if ($count == 1) {
  echo'<script type="text/javascript">
      alert("El usuario ya existe");
      window.location.href="register.html";
      </script>';


} else {
  if ($tipo=3){
    $sql = "INSERT INTO usuarios (nombre, apellido, email, idtipousuario, password )
    VALUES ('". $nombre ."','". $apellido . "','". $email . "','". $tipo . "','". $hash . "')";

    if ($conn->query($sql) === TRUE) {
      echo'<script type="text/javascript">
            alert("Usuario creado correctamente");
            window.location.href="index.php";
            </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }else{


$sql = "INSERT INTO usuarios (nombre, apellido, email, idtipousuario, password )
VALUES ('". $nombre ."','". $apellido . "','". $email . "','". $tipo . "','". $hash . "')";

if ($conn->query($sql) === TRUE) {
  echo'<script type="text/javascript">
        alert("Usuario creado correctamente");
        window.location.href="index.php";
        </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
?>
