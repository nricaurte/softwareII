<?php
class Proveedor extends Conexion_DB{
private  $extraido;
private  $consulta;
private  $resultado;

function consultar_proveedores(){

 $this->extraido=$this->Estrae_todo_registro("proveedor");
 return $this->extraido;


}
function  Consultar_proveedor(){
	 if($_SERVER['REQUEST_METHOD']=='POST'){
	 	$id=$_POST['id'];
    $this->extraido=$this->Estrae_registro("proveedor","id_proveedor",$id);
    return $this->extraido;
}
}
function  eliminar_proveedor(){
	 $this->conexion=$this->conectar_base_de_datos();
  if ($_SERVER['REQUEST_METHOD']=="GET") {
   $id=$_GET['id'];
   $this->consulta="DELETE  FROM proveedor WHERE id_proveedor='$id'";
   $this->resultado=mysqli_query($this->conexion,$this->consulta);
   $this->Cerrar_conexion($this->conexion);
 header("location: proveedores");

}
}

function modificar_proveedor(){
        $this->conexion=$this->conectar_base_de_datos();
        $id=$_POST['id_proveedor'];
        $nombre=$_POST['nombre'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $ciudad=$_POST['ciudad'];
        $email=$_POST['email'];
        $this->consulta =  "UPDATE proveedor Set nombre='$nombre',ciudad='$ciudad',direccion='$direccion',telefono='$telefono',email='$email' where id_proveedor='$id'"; 
        mysqli_query($this->conexion, $this->consulta);
        $this->Cerrar_conexion($this->conexion);;

}

function guardar_proveedor(){

        $this->conexion=$this->conectar_base_de_datos();
        $id=$_POST['id_proveedor'];
        $nombre=$_POST['nombre'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $ciudad=$_POST['ciudad'];
        $email=$_POST['email'];
        $this->consulta="INSERT INTO proveedor VALUES ('$id',' $nombre',' $telefono',' $direccion',' $ciudad',' $email')";
        mysqli_query($this->conexion, $this->consulta);
        $this->Cerrar_conexion($this->conexion);;
}
}

?>