<?php
class Conexion_DB {
private $conexion;
private $consulta;
private $consulta2;
private $resultado;
private $registro = array();
private $fila;

 function conectar_base_de_datos(){

	 $this->conexion=mysqli_connect("localhost","root","","tecnologyadvance2");
    if(!$this->conexion){
        echo "Conexion Fallida".mysqli_error($this->conexion);
    }
   return $this->conexion;
   }

    function Cerrar_conexion($conexion){
   mysqli_close($conexion);
  } 
  
  function Estrae_registro($tabla,$id_tabla,$id){
   $this->conexion=$this->conectar_base_de_datos();
       $this->consulta = "SELECT * FROM $tabla WHERE $id_tabla='$id'";
       $this->resultado = mysqli_query($this->conectar_base_de_datos(),  $this->consulta);
    while ( $this->fila = mysqli_fetch_assoc( $this->resultado)) {
       $this->registro =  $this->fila;
    }
    $this->Cerrar_conexion($this->conectar_base_de_datos());
    return     $this->registro;
  }

   function Estrae_todo_registro($tabla){
     $this->conexion=$this->conectar_base_de_datos();
       $this->consulta = "SELECT * FROM $tabla";
       $this->resultado = mysqli_query($this->conectar_base_de_datos(),  $this->consulta);
    while ( $this->fila = mysqli_fetch_assoc( $this->resultado)) {
       $this->registro[] =  $this->fila;
    }
    $this->Cerrar_conexion($this->conectar_base_de_datos());
         $this->consulta=""; 
    return     $this->registro;
  }



  function Ejecutar_consulta($sql){
   return  mysqli_query($this->conectar_base_de_datos(),  $sql);
  }

      function Estrae_registro_all($tabla,$id_tabla,$id){
    
         $this->consulta ="SELECT * FROM $tabla WHERE $id_tabla='$id'";
        $this->resultado = mysqli_query($this->conectar_base_de_datos(),   $this->consulta);
      while ( $this->fila = mysqli_fetch_assoc( $this->resultado)) {
        $this->registro[] =  $this->fila;
      }
      $this->Cerrar_conexion($this->conectar_base_de_datos());
      return      $this->registro;
  }

}
?>