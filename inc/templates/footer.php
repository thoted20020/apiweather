<script src="js/sweetalert2.all.min.js"></script>

<?php
  $actual = obtenerPaginaActual();
  if($actual==='registro'){
    echo '<script src="js/formulario.js"></script>';
  }
?>

</body>
</html>
