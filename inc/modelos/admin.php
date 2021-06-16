<?php

$accion = $_POST['accion'];
$password = $_POST['password'];
$usuario = $_POST['usuario'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];



if($accion === 'crear'){
  $opciones = array(
    'cost' => 12
  );
  $hash_password = password_hash($password, PASSWORD_BCRYPT);

  include '../funciones/conexion.php';

  try {
    $stmt = $conn->prepare("INSERT INTO usuarios ('usuario', 'password', 'pais', 'ciudad') VALUES (?, ?, ?, ?) ");
    $stmt->bind_param('ssss', $usuario , $hash_password , $pais , $ciudad);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  } catch(Exception $e){
    $respuesta=array(
      'pass' => $e->getMessage()
    );
  }

  die(json_encode($hash_password));

}
