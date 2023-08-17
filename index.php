<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Portafolio Durvin Gooy</title>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">Mi Portafolio</div>
            <ul class="nav-links">
                <li><a href="#sobre-mi">Sobre Mí</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section id="sobre-mi" class="about">
    <div class="about-container">
        <div class="about-image">
            <img src="img/durvin.jpg" alt="Durvin">
            <div class="image-caption">Developer Junior</div>
             <a href="durvin_godoy.pdf" class="download-button" download>Mi Currículum</a>
        </div>


        <div class="about-text">
            <h2>Sobre Mí</h2>
            <p>Hola, soy Durvin, un apasionado desarrollador junior de 29 años de edad originario de Guatemala. Me encanta transformar ideas en soluciones creativas a través del código. Siempre estoy emocionado por aprender y crecer en el mundo de la programación. Mi objetivo es contribuir a proyectos significativos y seguir evolucionando como profesional.</p>
        </div>
    </div>

    <section id="proyectos" class="projects">
    <div class="project-container">
        <div class="project">
            <img src="img/barberia.png" alt="Proyecto Barbería">
            <h3>Barbería HairStyle</h3>
            <p>Un sitio web moderno para una barbería que muestra servicios, horarios y detalles de contacto.</p>
            <a href="proyectos/barberia/index.html" class="project-link">Ver Proyecto</a>
        </div>
        <div class="project">
            <img src="img/encriptador.png" alt="Ecriptador">
            <h3>Encriptador</h3>
            <p>Encriptador de Texto </p>
            <a href="proyectos/encriptador/index.html" class="project-link">Ver Proyecto</a>
        </div>
    </div>
</section>

</section>



<section id="habilidades" class="skills">
    <h2>Habilidades</h2>
    <div class="skill-container">
        <div class="skill">
            <img src="img/java.png" alt="Java">
            <p>Java</p>
        </div>
        <div class="skill">
            <img src="img/python.png" alt="Python">
            <p>Python</p>
        </div>
        <div class="skill">
            <img src="img/django.png" alt="Django">
            <p>Django</p>
        </div>
        <div class="skill">
            <img src="img/mysql.png" alt="MySQL">
            <p>MySQL</p>
        </div>
        <div class="skill">
            <img src="img/php.png" alt="PHP">
            <p>PHP</p>
        </div>
        <div class="skill">
            <img src="img/javascript.png" alt="JavaScript">
            <p>JavaScript</p>
        </div>
        <div class="skill">
            <img src="img/html.png" alt="HTML">
            <p>HTML</p>
        </div>
        <div class="skill">
            <img src="img/css.png" alt="CSS">
            <p>CSS</p>
        </div>
    </div>
</section>
   <section id="contacto" class="contact">
        <h2>Contacto</h2>
        <div class="contact-form">
            <form action="enviar_correo.php" method="POST" id="formulario" onsubmit="enviarFormulario(); return false;">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
                
                <label for="empresa">Empresa:</label>
                <input type="text" id="empresa" name="empresa" required>
                
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>
                
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
                
                <button type="submit" onclick="mostrarPopupExito()">Enviar</button>
            </form>
            <p>Mi correo: dervin48@gmail.com</p>
            <!-- <p>Mi teléfono: +50230249071</p> -->
        </div>
    </section>




<footer class="footer">
    <p>&copy; 2023 | Desarrollado por Durvin Godoy</p>
</footer>

</body>
</html>