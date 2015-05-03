
<?php ob_start(); ?>


<div id="factura">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <div class="ui-widget">
                                    <label class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">N° Factura</label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">
                                        <input type="text" class="form-control input-sm" id="numero_fact" value="<?php  echo $numero;?>" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Fecha</label>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <input type="date" class="form-control input-sm" id="fecha" value="<?php echo strftime("%Y-%m-%d"); ?>" >
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Hora</label>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
            
                                    <input type="text" class="form-control input-sm" id="hora" value="<?php echo date("H:i:s");  ?>" readonly="readonly">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Cajero: </label>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <input type="text" class="form-control input-sm" id="cajero"  value="<?php echo $_SESSION['id_usuario']; ?>" readonly="readonly">  
                                </div>
                            </div>
                        </div>
                    </div>
  <br> <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-4 col-md-2 col-lg-2 control-label">Cliente</label>
                                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                                    <select name="cc_cliente" class="form-control input-sm" id="cc_cliente">
                                        <?php foreach ($clientes_base as $cliente) { ?>
                                        <option value='<?php echo $cliente['id_cliente']; ?>'><?php echo $cliente['id_cliente']." - ".$cliente['nombre']." ".$cliente['apellido']; ?></option>
                                        <?php } ?>
                                    </select>   
                                </div>
                            </div>
                        </div>

                    </div>
                   

                    <br>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form name="formulario" id="formulario" class="form-horizontal" role="form">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-5">
                                <div class="form-group">
                                    <div class="ui-widget">
                                        <label class="col-xs-12 col-sm-6 col-md-3 col-lg-3 control-label">Codigo:</label>
                                        <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9">
                                            <select name="cc_codigo" class="form-control input-sm" id="cc_codigo">
                                        <?php foreach ($producto_base as $productos) { ?>
                                        <option value='<?php echo $productos['id_producto']; ?>'><?php echo $productos['id_producto']." - ".$productos['nombre']." ".$productos['descripcion']; ?></option>
                                        <?php } ?>
                                    </select>  
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-6 col-md-3 col-lg-3 control-label">Cantidad:</label>
                                    <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9">
                                        <input type="text" class="form-control" id="cantidad" placeholder="Digite Cantidad" value="1">
                                    </div>
                                </div>
                            </div>   </form>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <button type="submit" class="btn btn-primary " id="agregar"><span class="icon icon-checkmark"></span> Agregar</button>
                            </div>
                     
                    </div>
   </div>
            </div>


 <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-responsive table-condensed" id="hola">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Vlr Unidad</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody >

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="panel-default">
                <div class="panel-body">
                    <h3>SubTotal: $ <label id="subtotal">0</label></h3>
                    <h3>IVA: $ <label id="iva">0</label></h3>
                    <h3>Total: $ <label id="total">0</label></h3>
                    <a class="btn btn-success" id="registrar" ><span class="icon icon-checkmark"></span> Registrar</a>
                </div>
            </div>
        </div>

   
    </div>



</div>


<script type="text/javascript" src="/TecnologyAdvance/js/factura.js"></script>
<?php
$contenido = ob_get_clean();

require 'base2.php';

?>