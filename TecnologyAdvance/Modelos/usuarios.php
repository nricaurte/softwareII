<?php  
class Usuario extends Conexion_DB{
	
private  $extraido;
private  $consulta;
private  $resultado;
private  $user;
private  $contrasena;
private  $id;

public function consultar_usuaios(){ 
 $this->extraido=$this->Estrae_todo_registro("usuario");
 return $this->extraido;
}

public function eliminar_usuario(){
    $this->conexion=$this->conectar_base_de_datos();
    if ($_SERVER['REQUEST_METHOD']=="GET") {
    $id=$_GET['id'];
    $this->consulta="DELETE  FROM usuario WHERE id_usuario='$id'";
    $this->resultado=mysqli_query( $this->conexion, $this->consulta);
    $this-> Cerrar_conexion( $this->conexion);
      header("location: usuarios");
}

}

 public   function Consultar_tabla($id){
		    $this->extraido=$this->Estrae_registro("usuario","id_usuario",$id);
		    return  $this->extraido;
   }

public  function Consulta_user_db( $pass,$usuario){ 
    $user=$this->Consultar_tabla($usuario);
    $contrasena = hash("sha512",$pass);
    $contrasena = $contrasena.$user['salt'];
    if($user['pass']==$contrasena){
        $_SESSION['id_usuario']=$user['id_usuario'];
        $_SESSION['nombre']=$user['nombre'];
        $_SESSION['email']=$user['email'];
        $_SESSION['apellido']=$user['apellido'];
        $_SESSION['direccion']=$user['direccion'];
        $_SESSION['telefono']=$user['telefono'];
        $_SESSION['rol']=$user['rol'];
        $_SESSION['estado']=$user['estado'];
    	   header("location: /TecnologyAdvance/index.php/clientes");
    }




}


public function ingresa_usuario($ID,$nombre,$apellido,$direccion,$telefono,$email,$rol,$password,$salt){
$this->conexion=$this->conectar_base_de_datos();
$this->consulta="INSERT INTO usuario VALUES ('$ID','$email','$nombre','$apellido','$direccion','$telefono','1','$rol','$password','$salt')";
$this->resultado=mysqli_query($this->conexion,$this->consulta);
$this-> Cerrar_conexion( $this->conexion);
}


public function modificar_usuario(){
        $this->conexion=$this->conectar_base_de_datos();
        $id=$_POST['id_usuario'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $estado=$_POST['estado'];
        $email=$_POST['email'];
        $rol=$_POST['rol'];
        $this->consulta =  "UPDATE usuario Set nombre='$nombre',apellido='$apellido',estado='$estado',direccion='$direccion',rol='$rol',telefono='$telefono',email='$email' where id_usuario='$id'"; 
        $this->resultado=mysqli_query($this->conexion,$this->consulta);
        $this-> Cerrar_conexion( $this->conexion);

}





}
?>


