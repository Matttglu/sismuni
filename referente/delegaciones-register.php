<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "municipio";

        $iddelegacion =$_POST["iddelegacion"];
        $descripcion =$_POST["descripcion"];

        // Create connection
        $conn = new mysqli($servername,$username,$password,$dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO delegaciones (iddelegacion, descripcion)
        VALUES ('". $iddelegacion ."','". $descripcion . "')";


        $conn->close();
?>
