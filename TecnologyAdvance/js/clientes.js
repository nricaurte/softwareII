var x=$(document).ready(main);
function main (){
$("#hola").dataTable();
$("#modificar_cliente").click(consultar_cliente);
$("#guardar_cliente").click(guardar_cliente);
}

function consultar_cliente(){

	 $.post('modificar_cliente',{
               id_cliente: $("#id_clientee").val(),
               nombre: $("#nombree").val(),
               apellido: $("#apellidoe").val(),
               ciudad: $("#ciudade").val(),
               direccion: $("#direccione").val(),
               telefono: $("#telefonoe").val(),
               email: $("#emaile").val(),
              },function(datos){   
                 $("#"+$("#id_clientee").val()+" #1").text($("#nombree").val()),
                 $("#"+$("#id_clientee").val()+" #2").text($("#apellidoe").val()),
                 $("#"+$("#id_clientee").val()+" #3").text($("#ciudade").val()),
                 $("#"+$("#id_clientee").val()+" #4").text($("#direccione").val()),
                 $("#"+$("#id_clientee").val()+" #5").text($("#telefonoe").val()),
                 $("#"+$("#id_clientee").val()+" #6").text($("#emaile").val())
                   alert("Modificacion Correcta");
              }
              );
}
function guardar_cliente(){
	var v=$("#id_cliente").val();
                $.post('ingreso_cliente',{
               id_cliente: $("#id_cliente").val(),
               nombre: $("#nombre").val(),
               apellido: $("#apellido").val(),
               ciudad: $("#ciudad").val(),
               direccion: $("#direccion").val(),
               telefono: $("#telefono").val(),
               email: $("#email").val(),
              },function(datos){   
		      var nuevaFila="<tr>";
          nuevaFila+="<td>"+$("#id_cliente").val()+"</td>"+"<td>"+$("#nombre").val()+"</td>"+"<td>"+$("#apellido").val()+"</td>"+"<td>"+$("#ciudad").val()+"</td>"
          +"<td>"+$("#direccion").val()+"</td>"+"<td>"+$("#telefono").val()+"</td>"+"<td>"+$("#email").val()+"</td>"; 
          nuevaFila+="</tr>"+"<td>";
          $("#Fila").append(nuevaFila);
          
           window.location='clientes';
          
               }
              );

}
