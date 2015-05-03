<?php  
class Nuevo_clientes extends Conexion_DB{
private  $extraido;
private  $consulta;
private  $resultado;

public  function consultar_clientes(){ 
 $this->extraido=$this->Estrae_todo_registro("cliente");
 return $this->extraido;
}

public  function ingresa_cliente($nombre,$id_cliente,$correo,$apellido,$ciudad,$telefono,$direccion){
 $this->conexion=$this->conectar_base_de_datos();
 $this->consulta="INSERT INTO cliente VALUES ('$id_cliente','$nombre','$apellido','$ciudad','$direccion','$telefono','$correo')";
 mysqli_query($this->conexion, $this->consulta);
 $this->Cerrar_conexion($this->conexion);
 header("location: clientes");
}


public  function consultar_cliente(){ 
	 if($_SERVER['REQUEST_METHOD']=='POST'){
	 	$id=$_POST['id'];
    $this->extraido=$this->Estrae_registro("cliente","id_cliente",$id);
    return $this->extraido;
}

}

public  function eliminar_clientes(){
	 $this->conexion=$this->conectar_base_de_datos();
  if ($_SERVER['REQUEST_METHOD']=="GET") {
   $id=$_GET['id'];
   $this->consulta="DELETE  FROM cliente WHERE id_cliente='$id'";
   $this->resultado=mysqli_query($this->conexion,$this->consulta);
   $this->Cerrar_conexion($this->conexion);
 header("location: clientes");

}
}

public function modificar_cliente(){
        $this->conexion=$this->conectar_base_de_datos();
        $id=$_POST['id_cliente'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $ciudad=$_POST['ciudad'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $this->consulta =  "UPDATE cliente Set nombre='$nombre',apellido='$apellido',ciudad='$ciudad',direccion='$direccion',telefono='$telefono',email='$email' where id_cliente='$id'"; 
        mysqli_query($this->conexion, $this->consulta);
        $this->Cerrar_conexion($this->conexion);
}



}  
?>


