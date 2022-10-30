function validarCampos(){
    Swal.fire({
  icon: 'error',
  title: 'Algo salio mal!',
  text: 'Los campos no pueden estar vacios!',
})
}
function validarLogin(){
    Swal.fire({
  icon: 'error',
  title: 'Algo salio mal!',
  text: 'Datos incorrectos verifique clave, usuario o correo electronico!',
})
}
function confirmarClave(){
    Swal.fire({
  icon: 'error',
  title: 'Algo salio mal!',
  text: 'Las clave no coinciden!',
})
}
function confirmarCorreo(){
    Swal.fire({
  icon: 'error',
  title: 'Algo salio mal!',
  text: 'Correo no coincide porfa verifique y vuelta a intentarlo!',
})
}
function confirmarUserExis(){
    Swal.fire({
  icon: 'error',
  title: 'Algo salio mal!',
  text: 'Nombre de usuario ya en uso!',
})
}
function exito(){
  Swal.fire({
  icon: 'success',
  title: 'Operacion exitosa :D',
  showConfirmButton: false,
  timer: 1500
})
}
function bloqueo(){
    Swal.fire({
  icon: 'error',
  title: 'Algo salio mal!',
  text: 'Cuenta bloqueada!',
})
}
function baneo(){
    Swal.fire({
  icon: 'error',
  title: 'Algo salio mal!',
  text: 'Cuenta baneada por el administrador!',
})
}
function peligro(){
  alert("peligro");
}
