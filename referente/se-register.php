<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "municipio";

        $tipos =$_POST["tipos"];
        $autoridad =$_POST["autoridad"];
        $nivel =$_POST["nivel"];
        $numero=$_POST["numero"];
        $emailusu=$_POST["emailusu"];
        $direccion=$_POST["direccion"];
        $delegacion=$_POST["delegacion"];
        $barrio=$_POST["barrio"];
        $telefono=$_POST["telefono"];
        $email=$_POST["email"];

        $nombredirector=$_POST["nombredirector"];
        $apellidodirector=$_POST["apellidodirector"];
        $celular=$_POST["celular"];
        $celular2=$_POST["celular2"];
        $emaildire=$_POST["emaildire"];
        $fechadesde=$_POST["fechadesde"];
        $observaciones=$_POST["observaciones"];
        // Create connection
        $conn = new mysqli($servername,$username,$password,$dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO servicioeducativo (tipo se, autoridad, nivel, numero, nombre, ID Usuario, telefono, direccion, entrecalle1, entrecalle2, iddelegacion, idbarrio, mail, iddirector)
        VALUES ('". $tipos ."','". $autoridad . "','". $nivel . "','". $numero . "','". $emailusu . "','". $direccion . "','". $delegacion . "','". $barrio . "','". $telefono . "','". $email . "')";

        $sql2 = "INSERT INTO director (nombre, apellido, celular, celular2, email, fechadesde, observaciones )
        VALUES ('". $nombredirector ."','". $apellidodirector . "','". $celular . "','". $celular2 . "','". $emaildire . "','". $fechadesde . "','". $observaciones . "')";
        $conn->close();
?>
