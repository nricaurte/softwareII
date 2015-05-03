<?php ob_start(); ?>
<div class="row">
  <div class="col-md-12 col-xs-12">
<div class="panel panel-default">
  <div class="panel-heading"><div class="panel-title">
    <button class="btn btn-primary fa-2x icon icon-plus" style="right:2333px " data-toggle="modal" data-target="#ventana_p" id="ingreso_p"> INGRESAR  PRODUCTOS</button>
  </div>
    </div>
    </div> </div>

</div>
<table id="hola" class="table table-striped table-bordered table-condensed table-hover display color2 " cellspacing="0" width="100%">
	<thead>
	<tr>
	         <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>precio</th>
           <th>Archivo</th>
           <th></th>
           <th></th>
	</tr>
    </thead>

       
    <tbody id="Fila">
         <?php foreach( $listar_productos as $row){ ?>
        <tr id="<?php echo $row['id_producto'];?>">
        <td ><?php echo $row['id_producto'];?></td>
        <td id="1"><?php echo $row['nombre'];?></td>
        <td id="2"><?php echo $row['descripcion'];?></td>
        <td id="4"><?php echo $row['precio'];?></td>
        <td id="5"><?php echo $row['archivo'];?></td>
        <td>  <a class="btn btn-success"  data-toggle="modal" data-target="#ventanad"  id="<?php echo $row['id_producto'];?>"><span class="icon icon-pencil"></span> Editar</a></td>
        <script language="JavaScript" type="text/javascript">
            $("#<?php echo $row['id_producto']; ?>").click(function(){
              $.post('consultar_producto',{
                id: <?php echo $row['id_producto']; ?>
              },function(datos){
                  datos = $.parseJSON(datos);     
               document.getElementById('id_producto').value =datos['id_producto'];
               document.getElementById('nombre').value =datos['nombre'];
               document.getElementById('descripcion').value =datos['descripcion'];
               document.getElementById('especificaciones').value =datos['especificaciones'];
               document.getElementById('precio').value =datos['precio'];
              }
              )
            }
            );
            </script>

        <td><a href="Eliminar_producto?d=<?php echo $row['id_producto'];?>" class="btn btn-primary icon icon-remove"></a></td>
      </tr>
      <?php }  ?>
     </tbody>
</table>


   
<div class="modal fade color2" id="ventanad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Editar Productos</h3>
      </div>
      <div class="modal-body">
          <form action="modificar_producto" method="post" nanme="formu" enctype="multipart/form-data">
                        <label for="">Foto</label>
            <input type="file" name="archivoe" id="archivoe">
              <label for="">ID</label>
            <input type="text" class="form-control" name="id_producto" id="id_producto" placeholder="id_producto"/>
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"/>
                        <label for="">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion"/>
               <label for="">Especificaciones</label>
            <input type="text" class="form-control" name="especificaciones" id="especificaciones" placeholder="especificaciones"/>
            <label for="">Precio</label>
            <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio"/>

          </div>
          <div class="modal-footer">
            <center><button type="submit" class="btn btn-success" name="modificar_producto" ><span clasS="icon icon-checkmark-circle"></span> Guardar</button>
               <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="icon icon-close"></span> Cerrar</button></center> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade color2" id="ventana_p" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Ingresar Productos</h3>
      </div>
      <div class="modal-body">
          <form action="guardar_producto" method="post" nanme="formu" enctype="multipart/form-data">
                        <label for="">Foto</label>
            <input type="file" name="archivoe" id="archivoe">
              <label for="">ID</label>
            <input type="text" class="form-control" name="id_producto" id="id_productoe" placeholder="id_producto"/>
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombree" placeholder="Nombre"/>
                        <label for="">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcione" placeholder="Descripcion"/>
                    <label for="">Especificaciones</label>
            <input type="text" class="form-control" name="especificaciones" id="especificacionese" placeholder="especificaciones"/>
            <label for="">Precio</label>
            <input type="text" class="form-control" name="precio" id="precioe" placeholder="Precio"/>

          </div>
          <div class="modal-footer">
            <center><button type="submit" class="btn btn-success" name="guardar_producto" id="guardar_producto"><span clasS="icon icon-checkmark-circle"></span> Guardar</button>
               <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="icon icon-close"></span> Cerrar</button></center> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="/TecnologyAdvance/js/productos.js"></script> 
<?php $contenido=ob_get_clean(); 

require "base2.php";

?>