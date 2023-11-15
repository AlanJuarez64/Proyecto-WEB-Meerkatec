@include("/common/header") 
<body>
  <br>
  <main class="informacion_de_contacto">
    
    <form id="intro">
    @csrf
    <h1 class="titulo-principal">¡Contáctanos!</h1>
    <label for="nombreapellido">Nombre y Apellido</label>
      <input type="text" id="nombreapellido" class="input-nombre" required>

      <label for="Correo">Correo Electrónico</label>
      <input type="email" id="Correo" class="input-mail" required placeholder="email@dominio.com">

      <label for="telefono">Teléfono</label>
      <input type="tel" id="telefono" class="input-tel" placeholder="000 000 000">

      <br>
      <label for=""><input type="checkbox" name="contacto" id="checkbox" checked>
        ¿Le gustaria recibir novedades de QuickHaul?</label>
      <br>
      <input type="submit" value="Enviar Formulario" class="enviar">

    </form>
  </main>

  <section class="mapa" id="intro">
    <h3 class="titulo-principal">Nuestra ubicación</h3>
    <p> Nuestro establecimiento está ubicado el corazón de nuestra ciudad</p>
    <div class="mapa-contenido">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.016526403824!2d-56.208412888097065!3d-34.906034772734245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959f7f80d0824b45%3A0xb9c1ce96f3a46d5c!2s25%20de%20Mayo%20500%2C%2011000%20Montevideo%2C%20Departamento%20de%20Montevideo!5e0!3m2!1ses!2suy!4v1700005673389!5m2!1ses!2suy"
       width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  @include("common/footer")
</body>