<?php ob_start(); ?>
<div class="row">
  <div class="col-md-12 col-xs-12">
<div class="panel panel-default">
  <div class="panel-heading"><div class="panel-title">
    <button class="btn btn-primary fa-2x icon icon-plus" style="right:2333px " data-toggle="modal" data-target="#ventana_cliente"> INGRESAR  USUARIO</button>
  </div>
    </div>
    </div> </div></div>
<table id="hola" class="table table-striped table-bordered table-condensed table-hover display color2 " cellspacing="0" width="100%">
  <thead>
  <tr>
           <th>ID</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Direccion</th>
           <th>Telefono</th>
           <th>Rol</th>
           <th>Estado</th>
           <th>Email</th>
           <th></th>
           <th></th>
  </tr>
    </thead>
     <tbody id="Fila">
         <?php foreach( $mostrar_usuaio as $row){ ?>
        <tr id="<?php echo $row['id_usuario'];?>">
        <td ><?php echo $row['id_usuario'];?></td>
        <td id="1"><?php echo $row['nombre'];?></td>
        <td id="2"><?php echo $row['apellido'];?></td>
        <td id="3"><?php echo $row['direccion'];?></td>
        <td id="4"><?php echo $row['telefono'];?></td>
        <td id="5"><?php echo $row['rol'];?></td>
        <td id="6"><?php echo $row['estado'];?></td>
        <td id="7"><?php echo $row['email'];?></td>
        <td>  <a class="btn btn-success"  data-toggle="modal" data-target="#ventana"  id="<?php echo $row['id_usuario'];?>"><span class="icon icon-pencil"></span> Editar</a></td>
           <script language="JavaScript" type="text/javascript">
            $("#<?php echo $row['id_usuario']; ?>").click(function(){
              $.post('consultar_usuario',{
                id: <?php echo $row['id_usuario']; ?>
              },function(datos){
                  datos = $.parseJSON(datos);     

               document.getElementById('id_usuario').value =datos['id_usuario'];
               document.getElementById('nombre').value =datos['nombre'];
               document.getElementById('apellido').value =datos['apellido'];
               document.getElementById('direccion').value =datos['direccion'];
               document.getElementById('telefono').value =datos['telefono'];
                document.getElementById('rol').value =datos['rol'];
               document.getElementById('estado').value =datos['estado'];
               document.getElementById('email').value =datos['email'];
              }
              )
            }
            );
            </script>

        <td><a href="eliminar_usuario?id=<?php echo $row['id_usuario'];?>" class="btn btn-primary icon icon-remove"></a></td>
      </tr>
      <?php }  ?>
     </tbody>
</table>


  
 
<div class="modal fade color2" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h3>Editar Usuario</h3></center>
      </div>
      <div class="modal-body">
       <form action="modificar_usuardio" method="post" >
        <div class="form-group">
          <label for="">ID</label>
          <input type="text" name="id_usuario" class="form-control"  id="id_usuario" readonly="readonly"/>

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre"  id="nombre"  />

          <label for="">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellido"   />

          <label for="">Direccion</label>
          <input type="text" class="form-control" name="direccion"  id="direccion" >


               
          <label for="">Rol</label>
              <select id="rol" class="form-control">
                   <option >Administrador</option>
                   <option>Cajero</option>
              </select>
            </div>
          <label for="">Telefono</label>
          <input type="text" class="form-control" name="telefono"  id="telefono" >

          <label for="">Email</label>
          <input type=mail class="form-control" name="telefono" id="email" >
           <label for="">Estado (1=Habilitado 0=Deshabilitado)</label>
          <input type=mail class="form-control" name="estado" id="estado" >
              </div>   
      </form>
 
 <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="modificar_usuario" data-dismiss="modal"><span class="icon icon-checkmark-circle"></span> Actualizar</button>
      
      <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="icon icon-close"></span> Cerrar</button></center>
   
    </div>
  </div></div> 
</div>
</div> 



<div class="modal fade color2" id="ventana_cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h3>Ingresar Usuario</h3></center>
      </div>
      <div class="modal-body">
       <form action="modificar_usuario" method="post" nanme="formu">
        <div class="form-group">
          <label for="">ID</label>
          <input type="text" name="id_usuario" class="form-control"  id="id_usuarioe" />

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre"  id="nombree"  />

          <label for="">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellidoe"   />


          <label for="">Direccion</label>
          <input type="text" class="form-control" name="direccion"  id="direccione" >

          <label for="">Telefono</label>
          <input type="text" class="form-control" name="telefono"  id="telefonoe" >


            
          <label for="">Rol</label>
              <select id="rolee" class="form-control">
                  <option>Administrador</option>
                   <option>Cajero</option>
              </select>
            </div>

          <label for="">Email</label>
          <input type=mail class="form-control" name="telefono" id="emaile" >
                   
          <label for="">Contraseña</label>
          <input type=mail class="form-control" name="password" id="password" >


              </div>   
      </form>

 <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="guardar_usuario" data-dismiss="modal"><span class="icon icon-checkmark-circle"></span> Guardar</button>
      
      <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="icon icon-close"></span> Cerrar</button></center> 
    </div>
  </div>
</div>
</div>   </div>   

<script type="text/javascript" src="/TecnologyAdvance/js/usuarios.js"></script>
<?php $contenido=ob_get_clean(); 
require "base2.php";
?>