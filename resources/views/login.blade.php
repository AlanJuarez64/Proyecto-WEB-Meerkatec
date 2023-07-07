<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>QuickHaul - Login</title>
        <link rel="stylesheet" href="{{asset('/css/style-login.css')}}">
        <script src="{{asset('/js/login.js')}}"></script>

        <header>
         
        </header>
      </head>
  <br>
  <br>
      <body>
        <section class="contenido-login">
        
        <form id="form-login" action="/login" method="POST">
        <div class="box">
            <img src="/img/fuente_quick_haul.png" width="300px" length="177px"> 
          </div>
          <br>
          
            @csrf
            <h1>Ingreso de Usuario</h1>
            <input type="text" id="token" placeholder="Ingrese su token" required>
            <input type="password" id="contrasenha" placeholder="Contraseña" required>
            
            <div>
              <button type="submit">Iniciar sesión</button>
            </div>
           </form>
        </section>
      
        
      </body>
</html>