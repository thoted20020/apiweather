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

    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);

    include '../funciones/conexion.php';

    try{
      $stmt = $conn->prepare("INSERT INTO usuarios (usuario, password, pais, ciudad) VALUES (?, ?, ?, ?) ");
      $stmt->bind_param('ssss', $usuario , $hash_password , $pais , $ciudad);
      $stmt->execute();
      if($stmt->affected_rows){
        $respuesta = array(
          'respuesta' => 'correcto'
          'id_insertado' => $stmt->insert_id
          'tipo' => $accion
        )
      };
      $stmt->close();
      $conn->close();
    }catch(Exception $e){
      //$respuesta = array(
        //'error' => $e->getMessage();
      //);
    }
    echo json_encode($respuesta);
  }
