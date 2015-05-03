<?php ob_start()?>
<div id="productos" class='panel panel-danger'>
         <?php foreach ($productos_inv as $key) { ?>
       <div class='panel-heading'><h1>Inventario <?php echo $key['nombre']."---".$key['id_producto']; ?></h1></div>    
    <div class='panel-body'>
  
        <table class="table table-condensed table-bordered">
            <thead>
                <tr>
                    <th colspan="4" class="text-center"></th>
                    <th colspan="2"class="text-center">Entrada</th>
                    <th colspan="2" class="text-center">Salida</th>
                    <th colspan="3" class="text-center">Saldo</th>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Cod_Producto</th>
                    <th>Vlr_Unid.</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Cantidad</th>
                    <th>Vlr_Unid.</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $invent3 =new Conexion_DB();
                $inventario2=$invent3->Estrae_registro_all("inventarios ","id_producto",$key['id_producto']);
                 foreach($inventario2 as $producto) {   ?>
                <tr>
                    <td><?php echo $producto['fecha']; ?></td>
                    <td><?php echo $producto['descripcion']; ?></td>
                    <td><?php echo $producto['id_producto']; ?></td>
                    <td><?php echo $producto['valor_uni']; ?></td>
                    <td><?php echo $producto['cantidade']; ?></td>
                    <td><?php echo $producto['totale']; ?></td>
                    <td><?php echo $producto['cantidads']; ?></td>
                    <td><?php echo $producto['totals']; ?></td>
                    <td><?php echo $producto['cantidadt']; ?></td>
                    <td><?php echo $producto['valort']; ?></td>
                    <td><?php echo $producto['totalt']; ?></td>
                </tr> 
                <?php } ?>
            </tbody>
        </table>

    </div>
     <?php } ?>
</div>



<?php $contenido=ob_get_clean();
require "base2.php";

?>