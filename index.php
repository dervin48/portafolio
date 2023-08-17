<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Dgodoydev</title>
</head>
<body>
<header>
    <div class="caja-encabezado">
        <nav>
            <ul class="nav-bar">
                <li> <a href="#top"> Inicio </a></li>
                <li> <a href="#sobremi">Sobre Mi</a></li>
                <li> <a href="#proyectos">Proyectos</a></li>
                <li> <a href=""> Contacto </a></li>
                <li> <a href=""> CV </a></li>
            </ul>
        </nav>
    </div>
</header>
    <section id="top" class="inicio">
        <h1>Durvin Godoy</h1>
        <img  class="foto-durvin" src="img/durvin.jpg" alt="Durvin">
        <h3>Sobre mi</h3>
        <p>Me Gusta el Aprendizaje</p>
    </section>
    <section id="proyectos" class="proyecto">
        <p> Proyectos</p>
        <img class="imagenes-proyectos" src="img/barberia.png" alt="Barberia Alura">
        <a href="proyectos/barberia/index.php">Barberia</a>
        <img class="imagenes-proyectos" src="img/encriptador.png" alt="Encripador Alura">
        <a href="proyectos/encriptador/index.html">Encripador</a>
    </section>
<main>
    <form>
        <section class="contacto">
            <h2>Contacto</h2>
            <label>Nombre</label>
            <input class="input-patron" type="text">
            <label>Asunto</label>
            <input class="input-patron" type="text">
            <label>Correo Electrónico</label>
            <input class="input-patron" type="email">
            <label>Mensaje</label>
            <textarea class="input-patron" rows="4"></textarea>
            <input type="submit" value="Enviar formulario" class="enviar">
        </section>
    </form>
</main>
He agregado el campo "Asunto" y el área de texto "Mensaje" como lo solicitaste. Si tienes alguna otra pregunta o necesitas más ajustes, no dudes en preguntar.







    <section class="cv">
        <p> Hoja de Vida Durvin Godoy</p>
        <a href="durvin_godoy.pdf" download="durvin_godoy.pdf">Descargar Hoja de Vida</a>
    </section>

    <section class="habilidades">
        <h2>Habilidades </h2>
        <div class="div-habilidades">
            <img class="imagenes-habilidades" src="img/css.png" alt="css">
            <img class="imagenes-habilidades" src="img/html.png" alt="html">
            <img class="imagenes-habilidades" src="img/js.png" alt="js">
        </div>
       
    </section>

    <footer> © Copyright <b>Durvin Godoy</b></footer>
</body>
</html>