
document.getElementById('formulario-registro').addEventListener('submit', function(event) {

    let nombre = document.getElementById('nombre');
    let apellido = document.getElementById('apellido');

    let mensaje = `Bienvenido: ${nombre.value} ${apellido.value} \n
    tu registro ha sido exitoso! ` ;

    alert(mensaje);


});

