<?php ob_start(); ?>


<div class="row">
  <div class="col-md-12 col-xs-12">
<div class="panel panel-default">
  <div class="panel-heading"><div class="panel-title">
    <button class="btn btn-primary fa-2x icon icon-plus" style="right:2333px " data-toggle="modal" data-target="#ventana_proveedor"> INGRESAR  PROVEEDOR</button>
  </div>
    </div>
    </div> </div></div>
<table id="hola" class="table table-striped table-bordered table-condensed table-hover display color2 " cellspacing="0" width="100%">
  <thead>
  <tr>
           <th>ID</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Ciudad</th>
           <th>Direccion</th>
           <th>Telefono</th>
           <th></th>
           <th></th>
           <th></th>
  </tr>
    </thead>
     <tbody id="Fila">
         <?php foreach(  $listar_proveedor as $row){ ?>
        <tr id="<?php echo $row['id_proveedor'];?>">
        <td ><?php echo $row['id_proveedor'];?></td>
        <td id="1"><?php echo $row['nombre'];?></td>
        <td id="2"><?php echo $row['telefono'];?></td>
        <td id="3"><?php echo $row['direccion'];?></td>
        <td id="4"><?php echo $row['ciudad'];?></td>
        <td id="5"><?php echo $row['email'];?></td>
        <td>  <a class="btn btn-success"  data-toggle="modal" data-target="#ventana"  id="<?php echo $row['id_proveedor'];?>"><span class="icon icon-pencil"></span> Editar</a></td>
            <script language="JavaScript" type="text/javascript">
            $("#<?php echo $row['id_proveedor']; ?>").click(function(){
              $.post('consultar_proveedor',{
                id: <?php echo $row['id_proveedor']; ?>
              },function(datos){     
                  datos = $.parseJSON(datos);
               document.getElementById('id_proveedor').value =datos['id_proveedor'];
               document.getElementById('nombre').value =datos['nombre'];
               document.getElementById('telefono').value =datos['telefono'];
               document.getElementById('direccion').value =datos['direccion'];
               document.getElementById('email').value =datos['email'];
               document.getElementById('ciudad').value =datos['ciudad'];

              }
              )
            }
            );
            </script>


        <td><a href="eliminar_proveedor?id=<?php echo $row['id_proveedor'];?>" class="btn btn-primary icon icon-remove"></a></td>
            <td><a href="nuevo_pedido" class="btn btn-primary icon icon-pencil"> Ingresar Pedido</a></td>
      </tr>
      <?php }  ?>
     </tbody>
</table>
 
 
<div class="modal fade color2" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h3>Editar Cliente</h3></center>
      </div>
      <div class="modal-body">
       <form action="modificar_cliente" method="post" >
        <div class="form-group">
          <label for="">ID</label>
          <input type="text" name="id_proveedor" class="form-control"  id="id_proveedor" readonly="readonly"/>

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre"  id="nombre"  />

          <label for="">Telefono</label>
          <input type="text" class="form-control" name="telefono" id="telefono"   />

          <label for="">Direccion</label>
          <input type="text" class="form-control" name="direccion"  id="direccion" >

          <label for="">Ciudad</label>
          <input type="text" class="form-control" name="ciudad"  id="ciudad" >

          <label for="">Email</label>
          <input type=mail class="form-control" name="email" id="email" >
              </div>   
      </form>
 </div> 
 <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="modificar_proveedor" data-dismiss="modal"><span class="icon icon-checkmark-circle"></span> Actualizar</button>
      
      <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="icon icon-close"></span> Cerrar</button></center>
   
    </div>
  </div>
</div>
</div> 




 
<div class="modal fade color2" id="ventana_proveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h3>Ingresar Cliente</h3></center>
      </div>
      <div class="modal-body">
       <form action="modificar_cliente" method="post" nanme="formu">
        <div class="form-group">
            <label for="">ID</label>
          <input type="text" name="id_proveedor" class="form-control"  id="id_proveedore" />

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombree"  id="nombree"  required />

          <label for="">Telefono</label>
          <input type="text" class="form-control" name="telefonoe" id="telefonoe"  required />

          <label for="">Direccion</label>
          <input type="text" class="form-control" name="direccione"  id="direccione" required>

          <label for="">Ciudad</label>
          <input type="text" class="form-control" name="ciudade"  id="ciudade"required>

          <label for="">Email</label>
          <input type=mail class="form-control" name="emaile" id="emaile" required>
              </div>  

           <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="guardar_proveedor" data-dismiss="modal"><span class="icon icon-checkmark-circle"></span> Guardar</button>
      
      <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="icon icon-close"></span> Cerrar</button></center> 
    </div>     
      </form>
 </div> 

  </div>
</div>
</div>    


<script src="/TecnologyAdvance/js/proveedores.js"></script>   
<?php $contenido=ob_get_clean(); 
require "base2.php";
?>