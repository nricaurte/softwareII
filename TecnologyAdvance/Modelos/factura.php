<?php

class Factura extends Conexion_DB{

private  $extraido;
private  $consulta;
private  $consulta5;
private  $resultado;
private  $resultado2;
function consultar_suma_hecho($id){
 $this->conexion=$this->conectar_base_de_datos();
  $this->consulta = "SELECT cantidade FROM inventarios where descripcion='hecho' and id_producto='$id' ";
   $this->resultado=mysqli_query($this->conexion,$this->consulta);
 $inicial = 0; 

while ($fila = mysqli_fetch_assoc( $this->resultado)) {
$inicial = $inicial + $fila['cantidade'];
}

return $inicial; 
}

function consultar_suma_venta($id){
 $this->conexion=$this->conectar_base_de_datos();
 $this->consulta = "SELECT cantidads FROM inventarios where descripcion='venta' and id_producto='$id' ";
 $this->resultado=mysqli_query($this->conexion,$this->consulta);
 $inicial = 0; 

while ($fila = mysqli_fetch_assoc( $this->resultado)) {
$inicial = $inicial + $fila['cantidads'];
}

return $inicial; 
}

function consultar_numero(){
 $this->conexion=$this->conectar_base_de_datos();
 $this->consulta ="SELECT id_factura FROM factura ORDER BY  id_factura DESC LIMIT 1";
 $this->resultado=mysqli_query($this->conexion,$this->consulta);
 $date="";
while ($fila = mysqli_fetch_assoc( $this->resultado)) {
    $date=$fila['id_factura']+1;
}
return $date;
 $this->Cerrar_conexion($this->conexion);
}


function guardar_detalle_factura($datos){
  $f=strftime("%Y-%m-%d");
  $this->conexion=$this->conectar_base_de_datos();
foreach ($datos as $llave => $producto) {
  $this->consulta="INSERT INTO detalle_factura VALUES ('".$producto[0]."','".$producto[1]."','".$producto[2]."','".$producto[3]."','".$producto[4]."','".$producto[5]."')";
  $this->resultado2=mysqli_query($this->conexion,$this->consulta);
  $sum=$this->consultar_suma_hecho($producto[1])-$this->consultar_suma_venta($producto[1]);
  $this->consulta5="INSERT INTO inventarios VALUES ('','".$producto[1]."','venta','$f','".($producto[5]/$producto[3])."','0','0','".$producto[3]."','".($producto[5]*$producto[3])."','".($sum-$producto[3])."','".($producto[5]/$producto[3])."','".(($sum-$producto[3])*($producto[5]/$producto[3]))."')";
  $this->resultado=mysqli_query($this->conexion,$this->consulta5);

}
 $this->Cerrar_conexion($this->conexion);

}

function guardar_factura(){
 $this->conexion=$this->conectar_base_de_datos();
 $id_factura=$_POST['id_factura'];
 $id_cliente=$_POST['id_cliente'];
 $fecha=$_POST['fecha'];
 $hora=$_POST['hora'];
 $id_usuario=$_POST['id_usuario'];
 $total=$_POST['total'];
 $this->consulta="INSERT INTO factura VALUES ('','$id_cliente',' $fecha','$hora','$id_usuario',' $total')";
 $this->resultado=mysqli_query($this->conexion,$this->consulta);
 $this->Cerrar_conexion($this->conexion);

}

function Consultar_facturas(){

 $this->extraido=$this->Estrae_todo_registro("factura");
 return $this->extraido;

}

}
?>