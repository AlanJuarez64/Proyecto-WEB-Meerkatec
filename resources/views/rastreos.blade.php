@include("common/header")
<body>
    <br><br>
    <section class="Rastreos">
            <form id="intro" action="{{ route('rastrear.articulo')}}" method="post">
                @csrf
                <h1>Rastreos de paqueteria</h1><br>
                <label for="articulo">ID del artículo:</label><br>
                <input type="number" name="articulo" id="articulo" class="buscar-id"><br>
                <button type="submit" value="Buscar" class="enviar">Rastrear</button>
                <br><br>
                @if(isset($estadoPaquete))
                <h2> <b>El paquete se encuentra: {{$estadoPaquete}}</b><h2>
            @endif
            @if(isset($error))
                <p>Error: {{ $error }}</p>
            @endif
            </form>
            <br><br>
    </section>
    <br><br>
</body>
@include("common/footer")
</html>