window.addEventListener('load', function() {
    var btnLogin = document.getElementById('btnlogin');
    btnLogin.classList.add('fixed-corner');
  });
/*Esto es un estilo CSS para el button del login en la visual de la página web de QuickHaul*/

document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Se evita que el formulario se envíe de forma predeterminada.
  
    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;
  
    // Aquí se puede realizar la validación con el token ej: nombre de usuario y contraseña personalizado.
    // Por ejemplo, se puede comparar los valores ingresados con una lista de usuarios registrados.
  

    // Construir objeto con los datos del formulario
    var formData = new FormData();
    formData.append('Nombre_Usuario', usuario);
    formData.append('Contrasenia', password);

        // Realizar la solicitud AJAX
        fetch('/login', {
          method: 'POST',
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              // Inicio de sesión exitoso, redirigir a otra página o realizar acciones adicionales
              alert("¡Inicio de sesión exitoso!");
              alert(data.message);
              window.location.href = '/dashboard';
          } else {
              // Inicio de sesión fallido, mostrar mensaje de error
              alert("Nombre de usuario o contraseña incorrectos, intente de nuevo.");
              alert(data.message);
          }
      })
      .catch(error => {
          // Error en la solicitud, mostrar mensaje de error
          alert('Error en la solicitud');
          console.error(error);
      });

  });
  