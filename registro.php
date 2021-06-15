<?php
  include 'inc/funciones/funciones.php';
  include 'inc/funciones/conexion.php';
  include 'inc/templates/header.php';
?>
  <div class="contenedor">
      <div class="barra">
          <a class="logo" href="../pages/">
              <h2 class="logo__nombre">
                  Api<span class="logo__bold">Weather</span>
              </h2>
          </a>
          <nav class="navegacion">
              <a class="navegacion__enlace" href="registro.php">
                  Registro
              </a>
              <a class="navegacion__enlace" href="login.php">
                  Login
              </a>
          </nav>
      </div>
  </div>
  <div class="contenedor-formulario">
      <h2>Crear Usuario</h2>
      <form id="formulario" class="caja-login" method="post">
          <div class="campo">
              <label for="usuario">Usuario: </label>
              <input type="text" name="usuario" id="usuario" placeholder="Usuario">
          </div>
          <div class="campo">
              <label for="password">Password: </label>
              <input type="password" name="password" id="password" placeholder="Password">
          </div>
          <div class="campo">
              <label for="pais">Pais: </label>
              <input type="text" name="pais" id="pais" placeholder="Pais">
          </div>
          <div class="campo">
              <label for="ciudad">Ciudad: </label>
              <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad">
          </div>
          <div class="campo enviar">
              <input type="hidden" id="tipo" value="crear">
              <input type="submit" class="boton" value="Crear cuenta">
          </div>
      </form>
  </div>
<?php
    include 'inc/templates/footer.php';
?>
