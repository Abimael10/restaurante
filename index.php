<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D'Santos Restaurant</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <header>
        <div class="texto">
            <h1 class="brand">D'Santos Restaurant</h1>
            <h3 class="subtitulo">Un oasis de sabor</h3>
            <a href="./aviso.php" class="boton">Ordenar Ya</a>
        </div>
        <div class="orilla-abajo"></div>
    </header>

    <main>
        <section class="sobre">
            <div class="contenedor">
                <h2 class="about">Sobre Nosotros</h2>
                <h3 class="slogan">Mil sabores en un solo lugar</h3>
                <p class="parrafo">Esta es una página de un restaurante con un nombre ficticio creada por mí para poner en practica algunos conceptos del desarrollo Web Responsive, sin utilizar ningún Framework de CSS.</p>
                <p class="parrafo">Aunque las imágenes por sí solas se ven muy apetitosas (jeje!), solo quiero dar a conocer lo que puedo construir.</p>
                <a href="./aviso.php" class="boton">Suscríbete</a>
            </div>
        </section>

        <section class="galeria">
                <div class="imagenes"><img src="./img/1.jpg" alt=""></div>

                <div class="imagenes"><img src="./img/2.jpg" alt=""></div>

                <div class="imagenes"><img src="./img/3.jpg" alt=""></div>

                <div class="imagenes"><img src="./img/4.jpg" alt=""></div>

                <div class="imagenes"><img src="./img/5.jpg" alt=""></div>
            <div class="orilla-abajo"></div>

        </section>

        <section class="chefs">
            <div class="contenedor">
                    <h2 class="about">Nuestros Chefs</h2>
                    <h3 class="slogan">Ellos son artistas del sabor</h3>

                <div class="cards">
                    <div class="card">
                        <img src="./img/chef1.jpg" alt="">
                        <h4>Josecito Abreu</h4>
                    </div>

                    <div class="card">
                        <img src="./img/chef2.jpg" alt="">
                        <h4>Carlos Mota</h4>
                    </div>

                    <div class="card">
                        <img src="./img/chef3.jpg" alt="">
                        <h4>Pedro Espino</h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="lugar">
            <div class="mapa">
                <h2>Nuestra Ubicación</h2>
                <div class="ubicacion">
                    <div id="map"></div>
                    <p class="parrafo">Esta en una ubicación ficticia ya que el negocio no es real. Es solo una muestra del uso que se le puede dar a esta API de Google.</p>
                </div>
            </div>
        </section>

        <section class="formulario">
            <div class="form">
                <h1>Contáctenos</h1>
                <p>Si hay algo que quiera decir, está en toda su libertad para compartirlo con nosotros.</p>

                <div class="entrada">
                    <form action="contact.php" method="POST">
                        <input type="text" name="name" placeholder="Nombre">
                        <input type="text" name="mail" placeholder="E-Mail">
                        <input type="text" name="message" id="msg" placeholder="Mensaje">
                        <button name="submit">Let's Talk!</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p class="parrafo">
                Página hecha con amor por Juan Abimael Santos Castillo.
            </p>
        </div>
    </footer>


    <script src="./js/app.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7dtDgeBXp4smXj98rcweS7t0PkHEpjJc&callback=initMap"
        async defer></script>
</body>
</html>