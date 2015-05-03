<?php
class Controlador{

 function Obj_Usuario (){
  return  $usuario=new Usuario;
 }

    function login_action(){
    require "Plantillas/login.php";
    }

  function consultar_user_action(){
    
           $pass="11"; 
           $usuario="11";
           $this->Obj_Usuario()->Consulta_user_db( $pass,$usuario);  

  }
  function salir_action(){

    session_unset();
      session_destroy();
      header("location: login");
  }
      function     ingresar_usuario_action(){

    if($_SERVER['REQUEST_METHOD']=='POST'){

    $ID=$_POST['id_usuario'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $rol=$_POST['rol'];
    $password=hash("sha512",$_POST['password']);
    $salt=md5(time());
    $password=$password.$salt;
    $this->Obj_Usuario()->ingresa_usuario($ID,$nombre,$apellido,$direccion,$telefono,$email,$rol,$password,$salt);
    }
    }



function clientes_action(){
  $cliente=new Nuevo_clientes();
  $mostar_cliente = $cliente->consultar_clientes();
    require "Plantillas/mostrar_cliente.php";
}

function ingrear_clientes_action(){

if($_SERVER['REQUEST_METHOD']=='POST'){
$nombre=$_POST['id_cliente'];
$id_cliente=$_POST['id_cliente'];
$correo=$_POST['email'];
$apellido=$_POST['apellido'];
$ciudad=$_POST['ciudad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$ingresar_cliente = new Nuevo_clientes();
$ingresar_cliente->ingresa_cliente($nombre,$id_cliente,$correo,$apellido,$ciudad,$telefono,$direccion); 
}
}

function  mostrar_usuario_action(){
 $mostrar_usuaio=$this->Obj_Usuario()->consultar_usuaios();  
 require "Plantillas/mostrar_usuarios.php";
}

function consultar_cliente_action(){
  $cliente=new Nuevo_clientes();
  $json=json_encode($cliente->consultar_cliente());
  echo $json;
}

function catalogo_productos_action(){

  $productos=new Producto();
  $Total_productos=$productos->consultar_productos();
   require "Plantillas/catalogo.php";
}

function listar_productos_action(){

  $productos=new Producto();
  $listar_productos=$productos->consultar_productos();
  require "Plantillas/mostrar_productos.php";
}
function consultar_producto_action(){
  $Producto=new Producto();
  $json=json_encode($Producto->  Consultar_producto());
  echo $json;


}
function consultar_usuario_action(){
  $user=new Usuario();
  $json=json_encode($user->Consultar_tabla($_POST['id']));
  echo $json;


}
function nueva_factura_action(){
  $prod=new Producto();
  $clien=new Nuevo_clientes();
  $factura3 = new Factura();
  $clientes_base=$clien->consultar_clientes();
  $producto_base=$prod->consultar_productos();
  $numero =  $factura3->consultar_numero();
  require "Plantillas/new_factura.php";

}




function guardar_detalle_factura_action(){
     
        $factura2 = new Factura();
        $ds=$_POST['datos'];
        $datos = json_decode($_POST['datos']);
        $factura2->guardar_detalle_factura(  $datos );


}

function Listado_factura_action(){
      $factura2 = new Factura();
      $facturas2 =$factura2->Consultar_facturas();
       require "Plantillas/listar_facturas.php";

}
function imprimir_factura_action(){
$id=$_GET['n_fact'];
$fact = new Conexion_DB();
$fact2 = new Conexion_DB();
$detalle_f=$fact->Estrae_registro_all('detalle_factura','id_factura',$id);
$factura1=$fact2->Estrae_registro("factura","id_factura",$id);
$clientew=$fact->Estrae_registro("cliente","id_cliente",$factura1['id_cliente']);
$cajero=$fact->Estrae_registro("usuario","id_usuario",$factura1['id_usuario']);


require "Plantillas/pdf.php";
}
function proveedores_action(){
  $proveedores=new Proveedor();
  $listar_proveedor=  $proveedores->consultar_proveedores();
  require "Plantillas/mostrar_proveedores.php";
}


function consultar_proveedor_action(){


  $proveedores=new Proveedor();
  $json=json_encode($proveedores->  Consultar_proveedor());
  echo $json;
}

function inventario_action(){

$invent =new Conexion_DB();
$invent2 =new Conexion_DB();
$inventario=$invent->Estrae_todo_registro("inventarios");
$productos_inv=$invent2->Estrae_todo_registro("producto");

require "plantillas/inventarios.php";
}


}
?>



