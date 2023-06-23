document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Se evita que el formulario se envíe de forma predeterminada.
  
    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;
  
    // Aquí se puede realizar la validación con el token ej: nombre de usuario y contraseña personalizado.
    // Por ejemplo, se puede comparar los valores ingresados con una lista de usuarios registrados.
  
    if (usuario === "usuario" && password === "contraseña") {
      alert("¡Inicio de sesión exitoso!");
      // Aquí puedes redirigir al usuario a otra página o realizar otras acciones necesarias después del inicio de sesión exitoso
    } else {
      alert("Nombre de usuario o contraseña incorrectos, intente de nuevo.");
    }
  });
  