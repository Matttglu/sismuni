<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "municipio";

        $tiposse =$_POST["tiposse"];
        $tiposinte =$_POST["tiposinte"];
        $responsable =$_POST["idresponsable"];
        $estado=$_POST["estado"];
        $observacion=$_POST["observacion"];
        $fechainteraccion=$_POST["fechainteraccion"];

        // Create connection
        $conn = new mysqli($servername,$username,$password,$dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO interacciones (id tipo se, idtipodeinteraccion, idresponsable, idestado, observacion, fechainteraccion)
        VALUES ('". $tiposse ."','". $tipointe . "','". $responsable . "','". $estado . "','". $observacion . "','". $fechainteraccion . "')";



        


        $conn->close();
?>
