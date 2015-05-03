<?php   ob_start();?>

<br>

<div class="col-md-3">
</div>

<div class="col-md-6">

<div class="panel panel-default" id="gradiente">
   <center> <div class="panel-heading"><span class="btn btn-circle2"><i class=" icon-user tamaimg"></i></span>
                 </div></center>
<div class="panel-body">

			<form role="form" method="post"  action="consultar_user">		  
			  
			  <div class="form-group">
			    <label >Usuario</label>
			    <input type="tect" class="form-control" id="usuario" name="usuario" placeholder="Introduce Usuario">
			  </div>

			  <div class="form-group">
			    <label >Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
			  </div>
			  
		<center>	  <button type="submit" class="btn btn-default btn-primary">Iniciar Sesion</button></center>
			</form>

</div>

</div>
</div>


<div class="col-md-3">
</div>

<?php $contenido=ob_get_clean();
require "base.php"
 ?> 