document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('formulario-sus').addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar el envío del formulario
      let email = document.getElementById('email').value;
      let mensaje = `Bienvenido: ${email} \ntu registro ha sido exitoso!`;
      alert(mensaje);
    });
  });

