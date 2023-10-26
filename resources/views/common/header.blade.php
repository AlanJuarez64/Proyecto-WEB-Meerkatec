<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="website icon" href="/img/iconweb.png">
  <link rel="website icon" href="/img/logopweb1.png">
  <title>QuickHaul</title>
    <header>
        <div class="caja">
            <a href="/"><img src="img/fuente_quick_haul.png" width="250px" length="250px"></a>
            <nav class="inicio">
            <ul>
                <li><a href="/">Página Principal</a></li>
                <li><a href="/acerca-de-nosotros">Acerca de Nosotros</a></li>
                <li><a href="/contacto">Contacto</a></li>
                <li class="despliegue">
                <a href="/servicios">Servicios▾</a>
                <div class="despliegue-contenido">
                    <a href="/envios" class="confirmar-envio">Envios</a>
                    <a href="/rastreos" class="Rastreos">Rastreos</a>
                </div>
                </li>
            </ul>
            </nav>

            <div class="header-right">
                @if(session('api_token'))
                    <form method="POST" action="/logout">
                    @csrf
                    <button id="btnlogout" type="submit">Cerrar Sesión</button>
                    </form>
                @else
                    <a href="/login"> <input id="btnlogin" type="button" value="Iniciar Sesión"></a>
                @endif
            </div>
        </div>
    </header>