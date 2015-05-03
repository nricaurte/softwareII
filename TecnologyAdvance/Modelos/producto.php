<?php 
class Producto extends Conexion_DB{
private  $extraid;
private  $consult;
private  $result;
private $conexio;


public function consultar_productos(){
 $this->extraid=$this->Estrae_todo_registro("producto");
 return $this->extraid;
}

public function eliminar_producto(){
  	 $this->conexio=$this->conectar_base_de_datos();
  if ($_SERVER['REQUEST_METHOD']=="GET") {
   $id=$_GET['d'];
   $this->consult="DELETE  FROM producto WHERE id_producto='$id'";
   $this->result=mysqli_query($this->conexio,$this->consult);
   $this->Cerrar_conexion($this->conexio);
   
 header("location: productos");


}
}

 public   function Consultar_producto(){
	 if($_SERVER['REQUEST_METHOD']=='POST'){ 
	  	$id=$_POST['id'];
    $this->extraido=$this->Estrae_registro("producto","id_producto",$id);
    return $this->extraido;
   }

}

function  guardar_producto(){

  $this->conexio=$this->conectar_base_de_datos();
  if(!is_null($_POST['id_producto']) ){
  $nombre = $_FILES['archivoe']['name'];
  $destino = "archivo/".$nombre;
  $ubicacion_temp = $_FILES['archivoe']['tmp_name']; 
  move_uploaded_file($ubicacion_temp,$destino);
          $id = $_POST['id_producto'];
		  $nombre = $_POST['nombre'];
		  $descripcion = $_POST['descripcion'];
		  $precio = $_POST['precio'];
		  $especificaciones= $_POST['especificaciones'];
  // echo $id."<br>".$nombre."<br>".$descripcion."<br>".$precio."<br>".$destino;
  $this->consult="INSERT INTO producto VALUES ('$id','$descripcion','$nombre','$especificaciones','0','$precio','$destino')";
  $this->result=mysqli_query($this->conexio,$this->consult);
  $this->Cerrar_conexion($this->conexio);
  header("location: productos");
}
}



function modificar_producto(){
          $this->conexio=$this->conectar_base_de_datos();
          if(!is_null($_FILES['archivoe']['name']) ){
		  $id = $_POST['id_producto'];
		  $nombre = $_POST['nombre'];
		  $descripcion = $_POST['descripcion'];
		  $precio = $_POST['precio'];
		  $especificaciones= $_POST['especificaciones'];
          $this->consult =  "UPDATE producto Set nombre='$nombre',descripcion='$descripcion',especificaciones='$especificaciones',precio='$precio' where id_producto='$id'"; 
          $this->result=mysqli_query($this->conexio,$this->consult);
          $this->Cerrar_conexion($this->conexio);
          header("location: productos");

}
}
}
?>