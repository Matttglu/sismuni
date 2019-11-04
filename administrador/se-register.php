<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Servicio Educativo - Municipio de Lomas de Zamora</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="icon" type="image/png" href="img/escudo.png">
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="">

            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registra tu servicio educativo!</h1>
              </div>
              <form class="user" method="post">

                  <div>
                    <label>Tipo Servicio Educativo:</label>
                    <select name="tipo-se" id="cusSelectbox">
                          <option value="Jardines-de-Infantes-Provinciales">Jardines de Infantes Provinciales</option>
                          <option value="Jardines-de-Infantes-Municipales">Jardines de Infantes Municipales</option>
                          <option value="Escuela-Nivel-Primario">Escuela Nivel Primario</option>
                          <option value="Escuela-Nivel-Secundario">Escuela Nivel Secundario</option>
                          <option value="Escuela-Nivel-Adultos">Escuela Nivel Adultos</option>
                          <option value="CENS">CENS</option>
                          <option value="CPII">CPII</option>
                          <option value="Fines">Fines</option>
                          <option value="Escuela Municipal">Escuela Municipal</option>
                    </select>
                  </div>
                  <br>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="exampleInputEmail" placeholder="Autoridad">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nivel">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="exampleInputEmail" placeholder="Número">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="exampleInputEmail" placeholder="IDusuario">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="fecha" placeholder="IDdirector">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="fecha" placeholder="calle y número">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="fecha" placeholder="Delegación">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="fecha" placeholder="Barrio">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="fecha" placeholder="Telefono">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="fecha" placeholder="Email">
                </div>
                <br>
                <br>
                <h3>Datos del director / vice</h3>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="nombredirector" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="apellidodirector" placeholder="Apellido">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="celular" placeholder="Celular">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="celular2" placeholder="Adjuntar otro número">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="email" placeholder="Email">
                </div>
                 <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="foto" placeholder="Foto">
                </div>
                 <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="fechadesde" placeholder="Fecha de inicio">
                </div>
                 <div class="form-group">
                  <input type="text" name="" class="form-control form-control-user" id="observaciones" placeholder="Observaciones">
                </div>
                <a href="./" class="btn btn-primary btn-user btn-block">
                  Registrar Servicio
                </a>

              </form>


            </div>

        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>
