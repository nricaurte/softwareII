<!DOCTYPE html>
<html lang="es">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <title>Tecnology Advance </title>

    <link href="/TecnologyAdvance/css/bootstrap.css" rel="stylesheet" />
    <link href="/TecnologyAdvance/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="//assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    


    <link href="/TecnologyAdvance/css/font.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/TecnologyAdvance/css/estilos2.css">
       
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="/TecnologyAdvance/assets/css/custom.css" rel="stylesheet" />
 
    <script type="text/javascript" src="/TecnologyAdvance/js/jquery-1.11.2.min.js"></script>

    
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="perfil">Tecnology Advance</a> 
            </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php date_default_timezone_set('America/Bogota'); echo "Fecha :".strftime("%Y-%m-%d"); echo "   "."Hora :".date("H:i:s"); ?> <a href="salir" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="/TecnologyAdvance/assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a class="active-menu"  href="clientes"><i class="fa fa-dashboard fa-3x"></i>Clientes</a>
                    </li>
                     <li>
                        <a  href="usuarios"><i class="fa fa-desktop fa-3x"></i>Usuarios</a>
                    </li>
                                       
                    <li>
                        <a href="#"><i class="fa fa-qrcode fa-3x"></i>Productos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="catalogo">Catalogo</a>
                            </li>
                            <li>
                                <a href="productos">Listado de Productos</a>
                            </li>
                            <li>
                                <a href="inventario">Inventario</a>
                            </li>
                        
                        </ul>
                    </li>
                       <li>
                        <a href="factura"><i class="fa fa-sitemap fa-3x"></i>Factura<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="new_factura">Factura</a>
                            </li>
                            <li>
                                <a href="Listado_factura">Listado Facturas</a>
                            </li>
                           
                        </ul>
                      </li>  

                      <li  >
                        <a  href="proveedores"><i class="fa fa-square-o fa-3x"></i>Proveedores</a>
                    </li>  
                      
                
                      
                </ul>
               
            </div>
            
        </nav>  



         <div id="page-wrapper" >
            <div id="page-inner">
    
               <?php echo $contenido; ?>   

        </div>
        </div>
        <!-- /. NAV SIDE  -->
        <script src="/TecnologyAdvance/js/bootstrap.min.js"></script> 
      <script type="text/javascript" src="/TecnologyAdvance/js/dataTables.min.js"></script>
      <script type="text/javascript" src="/TecnologyAdvance/js/dataTables.bootstrap.js"></script>

  
    <script src="/TecnologyAdvance/assets/js/jquery.metisMenu.js"></script>
    <script src="/TecnologyAdvance/assets/js/morris/morris.js"></script>
    <script src="/TecnologyAdvance/assets/js/custom.js"></script>

    
   
</body>
</html>
