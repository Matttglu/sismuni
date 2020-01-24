<?php
$conexion=mysqli_connect('localhost','root','','municipio');
        $tipousuario=$_POST['idtipousuario'];

            $sql="SELECT
                     nombre,
                     apellido 
                from usuarios 
                where idtipousuario='$tipousuario'";

            $result=mysqli_query($conexion,$sql);

            $cadena="<label>Seleccionar referentes</label> 
                    <select id='lista2' name='lista2'>";

            while ($ver=mysqli_fetch_row($result)) {
                $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
            }

            echo  $cadena."</select>";
