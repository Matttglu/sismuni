<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "municipio";
$email = $_POST["email"];
$pass = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
$sql = "select nombre,apellido,id from usuarios where nombre='". $nombre ."'";
$row = mysqli_fetch_assoc($conn->query($sql));
 $tipo = $row['id'];
 */
 	$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
	$row = mysqli_fetch_assoc($result);

  if($row['idtipousuario'] == 1){
      if (password_verify($pass,$row['password'])){
        $_SESSION['loggedin'] = true;
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellido'] = $row['apellido'];
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (20 * 60);


        header('Location: ../administrador/index.php');
      }
      else{
        echo '
          <center>
          <h1>EMAIL O CONTRASEÑA INCORRECTA</h1>

       <p><a href="../usr/index.html"><div class="contbtn">
            <button  type="submit" class="btn" id="btningresar"  autofocus>
                Ingresar
            </button>
  </center>
        </div></a></p></div>';
      }

 } else if($row['idtipousuario'] == 3) {
   if (password_verify($contra,$row['password'])){
     $_SESSION['loggedin'] = true;
     $_SESSION['nombre'] = $row['nombre'];
     $_SESSION['start'] = time();
     $_SESSION['expire'] = $_SESSION['start'] + (20 * 60);


     header('Location: ../referente');
   }else{
     echo '
       <center>
       <h1>EMAIL O CONTRASEÑA INCORRECTA</h1>

    <p><a href="../usr/index.html"><div class="contbtn">
         <button  type="submit" class="btn" id="btningresar"  autofocus>
             Ingresar
         </button>
 </center>
     </div></a></p></div>';
   }
 }
   else if($row['idtipousuario'] == 2) {
     if (password_verify($contra,$row['password'])){
       $_SESSION['loggedin'] = true;
       $_SESSION['nombre'] = $row['nombre'];
       $_SESSION['start'] = time();
       $_SESSION['expire'] = $_SESSION['start'] + (20 * 60);


       header('Location: ../cordinador');
     }else{
       echo '
         <center>
         <h1>EMAIL O CONTRASEÑA INCORRECTA</h1>


      <p><a href="../usr/index.html"><div class="contbtn">
           <button  type="submit" class="btn" id="btningresar"  autofocus>
               Ingresar
           </button>
 </center>
       </div></a></p></div>';
     }
}


?>
