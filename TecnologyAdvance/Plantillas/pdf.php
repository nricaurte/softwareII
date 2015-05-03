<?php ob_start();   ?>
 <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
<a href="" onclick="printContent('imprime')" class="btn btn-primary icon icon-print">  Imprimir</a>

  <a href='Listado_factura' class='hidden-print btn btn-primary icon icon-print'>  Listado de Facturas</a>

  <a href='new_factura' class='hidden-print btn btn-primary  icon icon-print'>  Nueva Factura</a>
  </div>
<div id="imprime">

  <div class='row'>
  <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
  </div>
  <font size='3' face='Verdana'>
  <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center'>
  <p>  <img src='../img/logo.png'></img></p>
  <p>Nit: 1069748845-5 Regimen Simplificado</p>
  <p>Cra 6 # 7-49 CC.Fusacatan</p>
  <p>Tel: 867 2290</p>
  <br>
  <p> Fecha:    <?php  echo $factura1['fecha'];?></p>
  </div>
  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
  <hr size='10' ></hr>
  </div>
  <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
  <table class='table table-border table-condense'>
  <tr>
  <th>Factura: </th>
  </tr>

  <tr>
  <td>     <?php  echo $factura1['id_factura'];?></td>
  </tr>
  </table>
  </div>
  <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5'>
  <table class='table table-bordered table-condense'>
  <tr>
  <th>Cliente</th>
  <th></th>
  </tr>

  <tr>
  <td>Cliente: </td>
  <td>  <?php  echo $clientew['nombre']."-".$clientew['apellido'];?></td>
  </tr>
  <tr>
  <td>CC o NIT: </td>
  <td><?php  echo $clientew['id_cliente']?></td>
  </tr>
  </table>
  </div>
  <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5'>
  <table class='table table-hover table-bordered'>
  <tr>
  <th>Vendedor</th>
  <th></th>
  </tr>
  <tr>
  <td>Vendedor: </td>
  <td><?php  echo $cajero['nombre']."-".$cajero['apellido'];?></td>
  </tr>
  <tr>
  <td>CC o Nit </td>
  <td><?php  echo $cajero['id_usuario'];?></td>
  </tr>
  </table>
  </div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
  <hr size='10' ></hr>
  

<table class='table table-hover table-bordered'>
  <thead>
  <tr>
           <th>Id_producto</th>
           <th>Cantidad</th>
           <th>Precio</th>
           <th>Total</th>
  </tr>
    </thead>
     <tbody id="Fila">
         <?php foreach($detalle_f as $row){ ?>
        <td id="1"><?php echo $row['id_producto'];?></td>
        <td id="2"><?php echo $row['cantidad'];?></td>
        <td id="3"><?php echo $row['precio'];?></td>
        <td id="4"><?php echo $row['total'];?></td>
   </tr>
      <?php }  ?>
     </tbody>
</table>

</div>

   <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5'>
  <table class='table table-hover table-bordered'>
  <tr>
  <td>Subtotal</td>
  <td><?php echo round($factura1['total']/1.16); ?></td>
  </tr>
  <tr>
  <td>IVA</td>
  <td><?php echo round(($factura1['total']/1.16)*0.16); ?></td>
  </tr>
  <tr>
  <td>Total </td>
  <td> <?php echo $factura1['total']; ?></td>
  </tr>

  
  </table>
  </div>
  <div id="bcTarget"></div>   
  </div>
  </div>

</div>

<script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>
<script src="/TecnologyAdvance/js/pdf.js"></script>  
<?php $contenido =ob_get_clean();
require "base2.php";
?>