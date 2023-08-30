@include("/common/header") 
<body>
  <br>
  <main class="informacion_de_contacto">
    
    <form id="intro">
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5710.632911729931!2d9.203665316004306!3d44.30344446292724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d49fc6fc6f4c05%3A0xefd9aab5f00f01db!2s16034%20Portofino%2C%20G%C3%A9nova%2C%20Italia!5e0!3m2!1ses-419!2suy!4v1687406368724!5m2!1ses-419!2suy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  @include("common/footer")
</body>