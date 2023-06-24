<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>QUICKHAUL</title>
        <link rel="stylesheet" href="{{asset('/css/style-login.css')}}">
        <script src="{{asset('/js/login.js')}}"></script>

        <header>
          <div class="box">
            <img src="/img/fuente_quick_haul.png" width="300px" length="177px"> 
            <img src="/img/logopweb1.png" width="150px" length="150px">
          </div>
        </header>
      </head>
  
      <body>
        <section class="contenido-login">
        <h2>Ingreso de Usuario</h2>
        
        <form id="form-login" action="/login" method="POST">
            @csrf
            <input type="text" id="token" placeholder="Ingrese su token" required>
            <input type="password" id="contrasenha" placeholder="Contraseña" required>
            
            <div>
              <button type="submit">Iniciar sesión</button>
            </div>
           </form>
        </section>
      
        
      </body>
</html>