<?php ob_start(); ?>
<table id="hola" class="table table-striped table-bordered table-condensed table-hover display color2 " cellspacing="0" width="100%">
  <thead>
  <tr>
           <th>N factura</th>
           <th>Id_cliente</th>
           <th>Fecha</th>
           <th>Hora</th>
           <th>Total</th>
           <th>
  </tr>
    </thead>
     <tbody id="Fila">
         <?php foreach($facturas2 as $row){ ?>
        <tr id="<?php echo $row['id_factura'];?>">
        <td ><?php echo $row['id_factura'];?></td>
        <td id="1"><?php echo $row['id_cliente'];?></td>
        <td id="3"><?php echo $row['fecha'];?></td>
        <td id="3"><?php echo $row['hora'];?></td>
        <td id="3"><?php echo $row['total'];?></td>
        <td><a href="imprimir?n_fact=<?php echo $row['id_factura'];?>" class="btn btn-primary icon icon-print">  Imprimir</a></td>
      </tr>
      <?php }  ?>
     </tbody>
</table>
  
 
<script src="/TecnologyAdvance/js/clientes.js"></script>   
<?php $contenido=ob_get_clean(); 
require "base2.php";

?>