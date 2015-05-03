<?php
session_start();

require "Modelos/conexion.php";
require "controlador.php";
require "Modelos/clientes.php";
require "Modelos/producto.php";
require "Modelos/usuarios.php";
require "Modelos/factura.php";
require "Modelos/proveedores.php";

$URI=$_SERVER['REQUEST_URI'];
$URI = explode("?", $URI);

$controlador = new Controlador();
$clientes = new Nuevo_clientes();
$usuario = new Usuario();
$producto= new Producto();
$factura = new Factura();
$proveedores=new Proveedor();
switch ($URI[0]) {

	//Inicion about us contacto redireciones
		case '/TecnologyAdvance/index.php/login':
	     	if (!isset($_SESSION['nombre'])) {
	     		$controlador->login_action();
	     	}
	     	else{
	     		header("location: /TecnologyAdvance/index.php/clientes");
	     	}
		break;
			case '/TecnologyAdvance/index.php/':
			   header("location: login");
		break;

	    case '/TecnologyAdvance/index.php/salir':
            $controlador->salir_action();
	 	break;	
/////////////////////////USUARIO-lOGIN
        case '/TecnologyAdvance/index.php/consultar_user':
            $controlador->consultar_user_action();
		break;

/////////////////////////CLIENTES
		case '/TecnologyAdvance/index.php/clientes':
             $controlador->clientes_action();
		break;

		case '/TecnologyAdvance/index.php/ingreso_cliente':
              $controlador->ingrear_clientes_action();
		break;

		case '/TecnologyAdvance/index.php/eliminar_cliente':
	        $clientes->eliminar_clientes();
		break;

          case '/TecnologyAdvance/index.php/consultar_cliente':
            $controlador->consultar_cliente_action();
		break;

		 case '/TecnologyAdvance/index.php/modificar_cliente': 
	        $clientes->modificar_cliente();
		break;
/////////////////////////USUARIOS
        case '/TecnologyAdvance/index.php/usuarios':
             $controlador->mostrar_usuario_action();
		break;
        
          case '/TecnologyAdvance/index.php/ingresar_usuario':
            $controlador->ingresar_usuario_action();
		break;

		  case '/TecnologyAdvance/index.php/modificar_usuario':
	        $usuario->modificar_usuario();
		break;

		case '/TecnologyAdvance/index.php/eliminar_usuario':
	        $usuario->eliminar_usuario();
		break;
		    case '/TecnologyAdvance/index.php/consultar_usuario':
            $controlador->consultar_usuario_action();
		break;

///////////////////////PRODUCTOS
		 case '/TecnologyAdvance/index.php/catalogo':
	        $controlador->catalogo_productos_action();
		break;

		 case '/TecnologyAdvance/index.php/productos':
	        $controlador->listar_productos_action();
		break;

		case '/TecnologyAdvance/index.php/Eliminar_producto':
		    $producto->eliminar_producto();
		break;

		  case '/TecnologyAdvance/index.php/consultar_producto':
            $controlador->consultar_producto_action();
		break;

		case '/TecnologyAdvance/index.php/guardar_producto':
	       $producto->guardar_producto();
		break;

		case '/TecnologyAdvance/index.php/modificar_producto':
	       $producto->modificar_producto();
		break;
//////////////////////FACTURA
		case '/TecnologyAdvance/index.php/new_factura':
	        $controlador->nueva_factura_action();
		break;
		case '/TecnologyAdvance/index.php/guardar_factura':
	        $factura->guardar_factura();
		break;
		case '/TecnologyAdvance/index.php/guardar_detalle_factura':
	        $controlador->guardar_detalle_factura_action();
		break;
		case '/TecnologyAdvance/index.php/Listado_factura':
	        $controlador->Listado_factura_action();
		break;
		case '/TecnologyAdvance/index.php/imprimir':
	        $controlador->imprimir_factura_action();
		break;
		case '/TecnologyAdvance/index.php/inventario':
	        $controlador->inventario_action();
		break;
////////////////////////FACTURA		
		case '/TecnologyAdvance/index.php/proveedores':
	        $controlador->proveedores_action();
		break;
		case '/TecnologyAdvance/index.php/consultar_proveedor':
	        $controlador->consultar_proveedor_action();
		break;
		case '/TecnologyAdvance/index.php/modificar_proveedor':
	        $proveedores->modificar_proveedor();
		break;
		case '/TecnologyAdvance/index.php/eliminar_proveedor':
	        $proveedores->eliminar_proveedor();
		break;
		case '/TecnologyAdvance/index.php/guardar_proveedor':
	        $proveedores->guardar_proveedor();
		break;
	}

