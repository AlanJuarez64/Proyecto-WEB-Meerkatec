window.addEventListener('load', function () {
    var btnLogin = document.getElementById('btnlogin');
    btnLogin.classList.add('fixed-corner');
});
/*Esto es un estilo CSS para el button del login en la visual de la página web de QuickHaul*/

var form = document.getElementById("form-login").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var advert = document.getElementById("advert").value;


form.addEventListener("submit", e => {
    e.preventDefault(); // Se evita que el formulario se envíe de forma predeterminada.
    let advert = ""
    let ingreso = false;
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    advert.innerHTML = ""
    
    console.log(regexEmail.test(email.value))
    if(!regexEmail.test(email.value)){
        advert = `El usuario no es válido, intente de nuevo.`
        ingreso = true;
    }

    if (password.value.length < 8){
        advert = `La contraseña no es válida, intente de nuevo.`
        entrar = true;
    }

    if (ingreso == true) {
        ingreso.innerHTML = advert;
    }

    var formData = new FormData();
    formData.append('Nombre_Usuario', email);
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

    // Aquí se puede realizar la validación con el token ej: nombre de usuario y contraseña personalizado.
    // Por ejemplo, se puede comparar los valores ingresados con una lista de usuarios registrados.


    // Construir objeto con los datos del formulario
   


