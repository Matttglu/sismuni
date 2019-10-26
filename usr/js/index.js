// INSPIRED BY SEB KAY'S 'SIGN UP FORM'
// https://dribbble.com/shots/1776663-Purple-Sign-Up-Form
// https://dribbble.com/shots/1779149--Free-PSD-Purple-Sign-Up-Form-Payment-Details

// DO YOU HAVE A SPARE DRIBBBLE INVITE? I'D	APPRECIATE IT!
// dribbble.com/josec
//Precios
var numticket = 0;
var valormay = 0;
var valormen = 0;
var valmaymr = 0;
var valmenmr = 0;
var valauto = 0;
//-------------------------------
var mayores = "";
var menores = "";
var mayoresp = "";
var menoresp = "";
var autos = "";
var monto ="";
var hr ="";
var di="dia";
var reloj = setInterval(miReloj, 500);
//trae los precios
$(document).ready(function(){
    $.ajax({url: "../usr/php/consultarprecios.php",
    type: 'POST',
    data: 'id=testdata',
    dataType: 'json',
    cache: false,
    success: function(result){
       valormay = result[0];
       valormen = result[1];
       valmaymr = result[2];
       valmenmr = result[3];
       valauto = result[4];
      //--------------------
      $('#preciosant').html("<b>Mayores:</b>" + valormay + "   <b>Menores:</b>" + valormen + "<br><b>Mayores MR:</b>" + valmaymr + "   <b>Menores MR:</b>" + valmenmr + "<br><b>Autos:</b>" + valauto);
    }});

});

$(document).ready(function(){
  $("#btnbuscar").click(function(){
    numticket = document.getElementById('bticket').value;
    var parametros = {
      "numticket" : numticket
    };
    $.ajax({url: "../usr/php/consultarticket.php",
    type: 'POST',
    data: parametros,
    dataType: 'json',
    cache: false,
    success: function(result){
    if (result[15]== "1") {
      alert("El Ticket no existe o fue eliminado");
      $("#bticket").focus();
    }else{
      buscarticket();
      $("#cajero").html("CAJERO: " + result[13]);
      $("#nticket").html("TICKET Nº: " + result[0]);
      $("#dia4").html("FECHA: " + result[14].substring(0,10));
      $("#hora4").html("HORA: " + result[14].substring(11,19));
      $("#a").html(result[1]);
      $("#prea").html(result[2]);
      $("#impa").html(parseInt(result[1]) * parseInt(result[2]));
      //$("#ticket").html(result[1]);
      $("#n").html(result[3]);
      $("#pren").html(result[4]);
      $("#impn").html(parseInt(result[3]) * parseInt(result[4]));
      $("#ap").html(result[5]);
      $("#preap").html(result[6]);
      $("#impap").html(parseInt(result[5]) * parseInt(result[6]));
      $("#np").html(result[7]);
      $("#prenp").html(result[8]);
      $("#impnp").html(parseInt(result[7]) * parseInt(result[8]));
      $("#car").html(result[9]);
      $("#precar").html(result[10]);
      $("#impcar").html(parseInt(result[9]) * parseInt(result[10]));
      $("#tot").html(result[12]);
      $("#btneliminarticket").focus();
      //--------------------
    }
    }});
  });
});
$(document).ready(function(){


  $("#btneliminarticket").click(function(){
    var parametros = {
      "numticket" : numticket
    };
    var r = confirm("¿Realmente desea eliminar este ticket?");
    if (r == true) {
      $.ajax({url: "../usr/php/ticketcancelado.php",
      type: 'POST',
      data: parametros,
      cache: true,
      success: function(result){
          window.location = "index2.php";
      }});

    } else {
      txt = "Cancelado";
    }

  });
});
function buscarticket(){
  document.getElementById('containerbuscar').style.display = 'none';
  document.getElementById('ticket').style.display = 'block';
}
function volvercancelarticket(){
  document.getElementById('containerbuscar').style.display = 'block';
  document.getElementById('ticket').style.display = 'none';
}
//---------------------------------------
function cargarDatTicket(){
  mayores = document.getElementById('mayores').value;
  menores = document.getElementById('menores').value;
  mayoresp = document.getElementById('mayoresp').value;
  menoresp = document.getElementById('menoresp').value;
  autos = document.getElementById('autos').value;
}

function miReloj() {
  var d = new Date();
  document.getElementById(hr).innerHTML = "HORA: " + d.toLocaleTimeString();

}
function dia(){
      var dias=["DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO"];
      var dt = new Date();
      var dia = dt.getDate();
      var mes = dt.getMonth() + 1;
      var anio = dt.getFullYear();
      var text = dias[dt.getUTCDay()];
  document.getElementById(di).innerHTML = "FECHA: " + dia  +'/'+ mes +'/'+anio;


}

function carga() {

    document.getElementById("usuario").focus();
   }


function carga2() {

    document.getElementById("mayores").focus();
}
function carga3() {

    document.getElementById("nombre").focus();
}
function cargagrupo() {

    document.getElementById("btnimprimir").focus();
}
function nextFocus(inputF, inputS) {
  document.getElementById(inputF).addEventListener('keydown', function(event) {
    if (event.keyCode == 13) {

      document.getElementById(inputS).focus();
    }
  });
}


function calcular(){
  var vmayores = document.getElementById('mayores');
  var vmenores =  document.getElementById('menores');
  var vmayoresp =  document.getElementById('mayoresp');
  var vmenoresp =  document.getElementById('menoresp');
  var vautos =  document.getElementById('autos');
  var sumadetodos = parseInt(vmayores.value) + parseInt(vmenores.value) + parseInt(vmayoresp.value) + parseInt(vmenoresp.value) + parseInt(vautos.value);
  if (vmayores.value == "" || vmayoresp.value =="" || vmenores.value =="" || vmenoresp.value =="" || vautos.value ==""){

    document.getElementById('venta').style.display = 'block';
    document.getElementById('ticket').style.display = 'none';
    alert("Algún dato no está completo o no permitido");
    vmayores.focus();


  }else if(sumadetodos < 1 || parseInt(vmayores.value) >= 100 || parseInt(vmenores.value) >= 100 || parseInt(vmayoresp.value) >= 100 || parseInt(vmenoresp.value) >= 100 || parseInt(vautos.value) >= 100){
    document.getElementById('venta').style.display = 'block';
    document.getElementById('ticket').style.display = 'none';
    alert("Algún dato no está completo o no permitido, cantidad de personas máximas:100 por item. Los items no pueden ser todos cero.");
    vmayores.focus();
  }else{
    mayores = document.getElementById('mayores').value;
    menores = document.getElementById('menores').value;
    mayoresp = document.getElementById('mayoresp').value;
    menoresp = document.getElementById('menoresp').value;
    autos = document.getElementById('autos').value;

    var impmay = mayores * valormay;
    var impmen = menores * valormen;
    var impmayp = mayoresp * valmaymr;
    var impmenp = menoresp * valmenmr;
    var impau = autos * valauto;
    var total = impmay + impmen + impmayp + impmenp + impau;

    // document.getElementById('mostrar').value = String(total);
    document.getElementById('venta').style.display = 'none';
    document.getElementById('ticket').style.display = 'block';
    document.getElementById('a').innerHTML = mayores;
    document.getElementById('prea').innerHTML = "$" + valormay;
    document.getElementById('impa').innerHTML = "$" + impmay;
    document.getElementById('ap').innerHTML =  mayoresp;
    document.getElementById('preap').innerHTML = "$" + valmaymr;
    document.getElementById('impap').innerHTML = "$" + impmayp;
    document.getElementById('n').innerHTML = menores;
    document.getElementById('pren').innerHTML = "$" + valormen;
    document.getElementById('impn').innerHTML = "$" + impmen;
    document.getElementById('np').innerHTML = menoresp;
    document.getElementById('prenp').innerHTML = "$" + valmaymr;
    document.getElementById('impnp').innerHTML = "$" + impmenp;
    document.getElementById('car').innerHTML = autos;
    document.getElementById('precar').innerHTML = "$" + valauto;
    document.getElementById('impcar').innerHTML = "$" + impau;
    document.getElementById('tot').innerHTML ="$" + total;
    document.getElementById("btnimprimir").focus();
    hr='hora2';
    di='dia2';
    dia();
  }


}
function mostrarticket(){
  monto = document.getElementById('monto').value;
  cantmayores = document.getElementById('cantmayores').value;
  cantmenores = document.getElementById('cantmenores').value;

if(monto == "" || cantmayores == "" || cantmenores == ""){
  alert("Todos los datos son requeridos");
  $("#cantmayores").focus();
}else if(cantmayores < 0 ||cantmenores < 0 || monto < 0 || cantmayores >= 201 || cantmenores >= 201){
  alert("Valores no permitidos, cantidad de personas máximas:200 por item");
  $("#cantmayores").focus();
}else{
  document.getElementById('ticket').style.display = 'block';
  document.getElementById('grupos').style.display = 'none';
  document.getElementById('cmayores').innerHTML = cantmayores;
  document.getElementById('cmenores').innerHTML = cantmenores;
  document.getElementById('grupo').innerHTML = "";
  document.getElementById('impg').innerHTML = "$" + monto;
  document.getElementById('tot').innerHTML = "$" + monto;
  di='dia3';
  hr='hora3';
  dia();


}
}
function volvergrupos(){
  document.getElementById('ticket').style.display = 'none';
  document.getElementById('grupos').style.display = 'block';
}
function volver(){
  document.getElementById('venta').style.display = 'block';
  document.getElementById('ticket').style.display = 'none';
  document.getElementById('mayores').focus();
}


function imprimir(){
  var ficha = document.getElementById('imprimir');
   var ventimp = window.open(' ', 'popimpr');
   var headhtml = '<style>@media print{ body{padding-left:5px;width:310px; margin: 0px; font-family: Arial, Helvetica, sans-serif;}p{font-size:12px;}.total{font-size:20px;}h4{margin: 0px;font-family: Arial, Helvetica, sans-serif;font-size:14px;}.titulo{font-size:14px;}}</style>';
   var imprimirhtml = headhtml.concat(ficha.innerHTML);
   ventimp.document.write(imprimirhtml);
   ventimp.document.close();
   ventimp.print();
   ventimp.close();
   if (mayores!=""){
     document.getElementById('mayores').value = "";
     document.getElementById('menores').value = "";
     document.getElementById('mayoresp').value = "";
     document.getElementById('menoresp').value = "";
     document.getElementById('autos').value = "";

     window.location = "index2.php";
   }else{
     window.location = "index2.php";
   }
}
function altaVenta(){

var parametros = {
              "may" : mayores,
              "men" : menores,
              "mayp" : mayoresp,
              "menp" : menoresp,
              "au" : autos
      };
 $.ajax({
 // aqui va la ubicación de la página PHP
   data:parametros,
   url: 'php/insertar.php',
   type: 'POST',
   dataType: 'html'


 });

}
function altaGrupo(){

var parametros = {
              "cantmayores": cantmayores,
              "cantmenores": cantmenores,
              "monto" : monto
      };
 $.ajax({
 // aqui va la ubicación de la página PHP
   data:parametros,
   url: 'php/grupos.php',
   type: 'POST',
   dataType: 'html'


 });

}
function validarSiNumero(numero){
    if (!/^([0-9])*$/.test(numero)){
      alert("El valor " + numero + " no es un número");
      limpiar(document.getElementsByName(numero));
    }
}
function limpiar(objeto){
  document.getElementById(objeto).value ="";
}


function enviar(pagina){
document.cambiodeprecio.action = pagina;
document.cambiodeprecio.submit();
}
//ajax
$(document).ready(function(){
  $("#btncalcular").click(function(){
    $.ajax({url: "../usr/php/ultimoid.php", success: function(result){
      $("#numticket").html(result);
    }});
  });
});
