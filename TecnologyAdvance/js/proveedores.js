var x=$(document).ready(main);

function main(){
$("#modificar_proveedor").click(modificar_proveedor);
$("#guardar_proveedor").click(guardar_proveedor);
$("#hola").dataTable();
}

function  modificar_proveedor(){


  $.post("modificar_proveedor",{
    id_proveedor: $("#id_proveedor").val(),
    nombre:$("#nombre").val(),
    telefono:$("#telefono").val(),
    direccion:$("#direccion").val(),
    ciudad:$("#ciudad").val(),
    email:$("#email").val()
  },function(datos){
                 $("#"+$("#id_proveedor").val()+" #1").text($("#nombre").val()),
                 $("#"+$("#id_proveedor").val()+" #2").text($("#telefono").val()),
                 $("#"+$("#id_proveedor").val()+" #3").text($("#direccion").val()),
                 $("#"+$("#id_proveedor").val()+" #4").text($("#ciudad").val()),
                 $("#"+$("#id_proveedor").val()+" #5").text($("#email").val())
                   alert("Modificacion Correcta");


  });
}
function guardar_proveedor(){
  $.post("guardar_proveedor",{
    id_proveedor: $("#id_proveedore").val(),
    nombre:$("#nombree").val(),
    telefono:$("#telefonoe").val(),
    direccion:$("#direccione").val(),
    ciudad:$("#ciudade").val(),
    email:$("#emaile").val()
  },function(datos){

   window.location='proveedores';

});
}