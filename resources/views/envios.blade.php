@include("/common/header")
<body>
    <section class="confirmar-envios">
        <form id="intro">
            <h1>Confirmación de envio</h1><br>
            <label for="Correo">Correo Electrónico</label>
            <input type="email" id="Correo" class="input-mail" required placeholder="email@dominio.com">
            <label for="id">ID del artículo:</label><br>
            <input type="number" name="id" id="id" class="buscar-id"><br>
            <button type="submit" value="enviar" class="enviar">enviar Confirmación</button>
        </form>
    </section>
</body>
@include("/common/footer")
</html>