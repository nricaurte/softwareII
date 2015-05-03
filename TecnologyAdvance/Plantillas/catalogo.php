<?php ob_start()?>
<div class="container-fluid">
		<?php foreach ($Total_productos as $row) { ?>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
    			<div class='panel panel-success'>
    		 		<div class='panel-heading'>
    					<h4><?php echo $row['nombre']; ?></h4>
    		  		</div>

    		  		<div class='panel-body'>
    		  			<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
				           	<h3>Descripcion : <?php echo $row['descripcion'] ?></h3>
				           	<h3>Precio : <?php echo $row['precio'] ?></h3>
                       
                        </div>
                        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                        		<img class='img-rounded img-responsive' alt='1' src="<?php echo "/TecnologyAdvance/".$row['archivo'] ?>" >
                
                        </div>
                    </div>
    			</div>
     		</div>
		<?php } ?>
	
</div>


<?php $contenido=ob_get_clean();
 require "base2.php"; 
?>