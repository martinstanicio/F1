<!DOCTYPE html>
<html>
  <head>
    <title>Formula 1</title>
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="icon" type="image/png" href="./img/logo.svg"/>
  </head>

  <body>
    <nav>
      <img src="./img/logo.svg" alt="logo" />

      <ul>
        <li><a href="./index.php">Inicio</a></li>
        <li><a href="./2022.php">2022</a></li>
        <li><a href="./pilotos.php">Pilotos</a></li>
        <li><a href="./autos.php">Autos</a></li>
        <li><a href="./contacto.php">Contacto</a></li>
      </ul>
    </nav>

    <header>
      <h1>Contactanos</h1>
    </header>

    <main>
      <section class="container">
        <form>
          <div class="field">
            <label for="nombre">Nombre</label>
            <input
              type="text"
              name="nombre"
              id="nombre"
              required
              placeholder="Juan"
            />
          </div>
          <div class="field">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              required
              placeholder="example@example.com"
            />
          </div>
          <div class="field">
            <label for="telefono">Número de teléfono</label>
            <input
              type="tel"
              name="telefono"
              id="telefono"
              placeholder="+54 9 348 412 34-45"
            />
          </div>
          <div class="field">
            <label for="genero">Género</label>
            <select name="genero" id="genero" required>
              <option value="" disabled seleced>Eliga una opción</option>
              <option value="m">Hombre</option>
              <option value="f">Mujer</option>
              <option value="o">No binario</option>
              <option value="p">Prefiero no decirlo</option>
            </select>
          </div>
          <div class="field">
            <label for="mensaje">Tu mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="10" required></textarea>
          </div>
          <div class="field">
            <input type="submit" value="Enviar" />
          </div>
          <div class="field">
            <input type="reset" value="Resetear" />
          </div>
        </form>
      </section>
    </main>

    <footer>
      <p>Hecho por MS & AR @ 2022</p>
      <ul>
        <li><a href="https://www.facebook.com/Formula1">Facebook</a></li>
        <li><a href="https://twitter.com/f1">Twitter</a></li>
        <li><a href="https://www.instagram.com/f1/">Instagram</a></li>
        <li><a href="https://www.youtube.com/F1">YouTube</a></li>
      </ul>
    </footer>
  </body>
</html>
