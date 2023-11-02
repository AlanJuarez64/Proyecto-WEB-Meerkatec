@include("/common/header")
<body>
    <section class="confirmar-envios">
        <form id="intro" method="post">
            @csrf
            <h1>Confirmación de envio</h1><br>
            <label for="Correo">Correo Electrónico</label>
            <input type="email" id="Correo" name='Correo' class="input-mail" required placeholder="email@dominio.com">
            <label for="id">ID del artículo:</label><br>
            <input type="number" name="id" id="id" class="buscar-id"><br>
            @if(session('success_message'))
                <p>{{ session('success_message') }}</p>
            @else
            <p><i><b>IMPORTANTE<b>: Asegurese de que el correo Electrónico sea el mismo que se ingresó 
            en la página e-comerce.</i></p>
            @endif
            <br>
            <button type="submit" value="enviar" class="enviar">enviar Confirmación</button>
            <br><br>
            
        </form>
    </section>
</body>
@include("/common/footer")
</html>