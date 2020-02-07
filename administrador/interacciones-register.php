<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "municipio";

        $idse =$_POST["idse"];
        $tiposinte =$_POST["tiposinte"];
        $responsable =$_POST["idusuario"];
        $estado=$_POST["estado"];
        $observacion=$_POST["observacion"];
        $fechainteraccion=$_POST["fechainteraccion"];

        // Create connection
        $conn = new mysqli($servername,$username,$password,$dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO interacciones (idse, idtipodeinteraccion, idresponsable, estado, observacion, fechainteraccion)
        VALUES ('". $idse . "','". $tiposinte . "','". $responsable . "','". $estado . "','". $observacion . "','". $fechainteraccion . "')";





        $result = $conn->query($sql);

        echo'<script type="text/javascript">
              window.location.href="tabla-iteracciones.php";
              </script>';
        $conn->close();
?>
