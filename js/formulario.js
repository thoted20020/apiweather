eventListeners();

function eventListeners() {
    document.querySelector('#formulario').addEventListener('submit', validarRegistro);
}

function validarRegistro(e) {
    e.preventDefault();

    var usuario = document.querySelector('#usuario').value,
        password = document.querySelector('#password').value,
        pais = document.querySelector('#pais').value,
        ciudad = document.querySelector('#ciudad').value,
        tipo = document.querySelector('#tipo').value;

        if(usuario === '' || password === '' || pais === '' || ciudad === ''){
          Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
          })
        }else{
          var datos = new FormData();
          datos.append('usuario',usuario);
          datos.append('password',password);
          datos.append('pais',pais);
          datos.append('ciudad',ciudad);
          datos.append('accion',tipo);

          var xhr = new XMLHttpRequest();

          xhr.open('POST', 'inc/modelos/admin.php', true);

          xhr.onload = function(){
            if(this.status === 200){
              console.log(JSON.parse(xhr.responseText));
            }
          }

        xhr.send(datos);
        }
}
