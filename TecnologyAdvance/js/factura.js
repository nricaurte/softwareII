var x=$(document).ready(main);
 var total2=0;
 var total;
 var iva;
 var subtotal;
 var valores=new Array();
function main(){
$("#agregar").click(agregar_producto);
$("#registrar").click(guardar_en_base);
}
function agregar_producto(){

                $.post('consultar_producto',{
               id: $("#cc_codigo").val(),
              },function(datos){  
                     

		        datos = $.parseJSON(datos);  
            
             var $a=$("#cantidad").val();
             var $b=datos['precio'];
             total=$a*$b;
             
             total2 += total;
             subtotal=(total2/1.16).toFixed(2);
             iva=(subtotal*0.16).toFixed(2);
           $("#hola tbody").append("<tr class='h'>"+"<td>"+datos['id_producto']+"</td>"+
                                  "<td>"+datos['nombre']+"-"+datos['descripcion']+"</td>"+
                                   "<td>"+$a+"</td>"+
                                   "<td>"+datos['precio']+"</td>"+
                                   "<td>"+total+"</td>"+
            "</tr>");
    
    $("#total").text(total2);
    $("#iva").text(iva);
    $("#subtotal").text(subtotal);

              });

}
function guardar_en_base(){

   $.post('guardar_factura',{
               id_factura: $("#numero_fact").val(),
               id_cliente: $("#cc_cliente").val(),
               fecha: $("#fecha").val(),
               hora: $("#hora").val(),
               id_usuario: $("#cajero").val(),
               total: total2,
              },function(datos){  
   
              });



$('#hola tbody tr').each(function () {
var codigo= $(this).find('td').eq(0).html();
var nombre = $(this).find('td').eq(1).html();
var cantidad = $(this).find('td').eq(2).html();
var precio = $(this).find('td').eq(3).html();
var total = $(this).find('td').eq(4).html();

 var valor=new Array($("#numero_fact").val(),codigo,nombre,cantidad,precio,total);

 valores.push(valor);
});

  var datos = JSON.stringify(valores); 
  $.post("guardar_detalle_factura",{
    datos: datos

  },function(datos){ 
alert("Factura Realizada con exito");
   }); 

  window.location.href ="imprimir?n_fact="+$("#numero_fact").val();
  
}