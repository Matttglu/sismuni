<!DOCTYPE html>
<?php
require ('conexion.php');
 ?>
<html lang="en">
<script language="javascript" src="js/js.js"></script>
   <script language="javascript">
			$(document).ready(function(){
				$("#tipose").change(function () {

			//		$('#tipose').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');

					$("#tipose option:selected").each(function () {
						se = $(this).val();
						$.post("getse.php", { se: se }, function(data){
							$("#se").html(data);
						});
					});
				});
			});

  	</script>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Interacciones - Municipio de Lomas de Zamora</title>

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
                <h1 class="h4 text-gray-900 mb-4">Interacciones con el municipio</h1>
              </div>
              <form class="user" method="post" action="interacciones-register.php">


                                  <div>
                                    <label>Tipo Servicio Educativo:</label>
                                    <select name="tiposse" id="tipose">
                                          <option></option>
                                          <option value="1">Jardines de Infantes Provinciales</option>
                                          <option value="2">Jardines de Infantes Municipales</option>
                                          <option value="3">Escuela Nivel Primario</option>
                                          <option value="4">Escuela Nivel Secundario</option>
                                          <option value="5">Escuela Nivel Adultos</option>
                                          <option value="6">CENS</option>
                                          <option value="7">CPII</option>
                                          <option value="8">Fines</option>
                                          <option value="9">Escuela Municipal</option>
                                    </select>
                                  </div>
                                  <label>Tipo de Usuario</label>
                                  <select id="lista1" name="lista1">
                                      <option value="0">Selecciona una opcion</option>
                                      <option value="3">Referente</option>
                                  </select>
                                  <br>
                                  <div id="select2lista" name="idresponsable"></div>

                                    <label>Elegi</label>
                                    <select id="se">

                                    </select>
                                  </div>
                                  <br>
                                  <div>
                                    <label>Tipo de Interacción:</label>
                                    <select name="tiposinte" id="cusSelectbox">
                                          <option value="1">Visita</option>
                                          <option value="2">Entrega de Kits</option>
                                          <option value="3">Mejora edilicia</option>
                                          <option value="4">Pintura</option>
                                          <option value="5">Entrega de materiales</option>
                                          <option value="6">Pasantias</option>
                                          <option value="7">Viajes</option>
                                          <option value="8">Otras</option>
                                    </select>
                                  </div>
                                  <br>
                                <div class="form-group">
                                  <input type="text" name="estado" class="form-control form-control-user" id="exampleInputEmail" placeholder="Estado">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="observacion" class="form-control form-control-user" id="exampleInputEmail" placeholder="Observación">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="fechainteraccion" class="form-control form-control-user" id="exampleInputEmail" placeholder="Fecha Interacción">
                                </div>
              <input type="submit" value='Registrar Servicio' class="btn btn-primary btn-user btn-block">

              </form>


            </div>

        </div>
      </div>
    </div>

  </div>
  <script type="text/javascript">
        $(document).ready(function(){
          $('#lista1').val(1);
          recargarLista();

          $('#lista1').change(function(){
            recargarLista();
          });
        })
      </script>
      <script type="text/javascript">
        function recargarLista(){
          $.ajax({
            type:"POST",
            url:"datos.php",
            data:"idtipousuario=" + $('#lista1').val(),
            success:function(r){
              $('#select2lista').html(r);
            }
          });
        }
  </script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>


</body>

</html>
