<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competencias para el Ingeniero en Software en el contexto global</title>
    <style>
        :root {
            --primary-color: #8a2be2; /* Púrpura */
            --secondary-color: #3e89b3; /* Naranja oscuro */
            --background-color: #f5f5f5; /* Gris muy claro */
            --text-color: #2f4f4f; /* Gris oscuro */
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--text-color);
            background-image: url('https://i.pinimg.com/564x/45/ef/bd/45efbd5562cd67cd631f63fba563fc1f.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            cursor: url("assets/pack690_1.png"), auto; 
        }

        a{
            cursor: url("assets/pack690.png"), auto; 
        }

        header {
            background-color: var(--primary-color);
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        header h1 {
            position: relative;
            z-index: 2;
        }

        nav {
            background-color: #fff;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav a {
            color: var(--primary-color);
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: var(--secondary-color);
        }

        section {
            padding: 60px 40px;
            margin-bottom: 30px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .section-title {
            color: var(--primary-color);
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .competencias-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .competencia {
            width: 300px;
            height: 300px;
            margin: 20px;
            perspective: 1000px;
        }

        .competencia-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .competencia:hover .competencia-inner {
            transform: rotateY(180deg);
        }

        .competencia-front, .competencia-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .competencia-front img {
            width: 100%;
            height: 100%; 
            border-radius: 0; 
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            object-fit: cover;
        }

        .competencia, .competencia-front, .competencia-back {
            width: 300px; 
            height: 200px;
        }

        .competencia-back {
            background-color: #d9e7ff;
            color: #2a2a2a;
            transform: rotateY(180deg);
            overflow-y: auto;
            border-radius: 8px;
        }

        .competencia-back h3 {
            margin-top: 0;
            color: #003366;
            font-size: 1.2em; 
        }

        .competencia-back p {
            font-size: 0.95em; 
            line-height: 1.5;
            margin-top: 10px;
        }

        #formacion-integral {
            clear: both;
            margin-top: 50px;
        }

        #habilidades {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .habilidad {
            text-align: center;
            margin: 20px;
            width: 200px;
        }

        .habilidad h3 {
            margin-bottom: 10px;
        }

        .habilidad-gif {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        footer {
            background-color: var(--primary-color);
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        .typing {
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid var(--secondary-color);
            animation: typing 3s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: var(--secondary-color) }
        }

        @keyframes code-rain {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }

        .code-rain {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            opacity: 0.1;
        }

        .code-rain::before {
            content: '1010101010101110001010101010101';
            font-family: monospace;
            font-size: 12px;
            color: #2a2a2a;
            position: absolute;
            top: -100px;
            animation: code-rain 5s linear infinite;
            white-space: nowrap;
        }

        .testimonial {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .testimonial-author {
            font-weight: bold;
            color: var(--primary-color);
        }

        .global-opportunity {
            background-color: #e6f7ff;
            border-left: 4px solid var(--secondary-color);
            padding: 15px;
            margin-bottom: 15px;
        }

        .global-opportunity h3 {
            color: var(--secondary-color);
            margin-top: 0;
        }

        #compromiso-personal {
            background-color: #fff;
            padding: 60px 40px;
            margin-bottom: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        #compromiso-personal h3 {
            color: var(--secondary-color);
            margin-top: 30px;
            margin-bottom: 15px;
        }

        #compromiso-personal ul {
            list-style-type: none;
            padding-left: 20px;
        }

        #compromiso-personal li {
            margin-bottom: 10px;
            position: relative;
        }

        #compromiso-personal li::before {
            content: '•';
            color: var(--primary-color);
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .compromiso-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .contact-person {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            width: calc(33.33% - 20px);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .contact-person h3 {
            color: var(--primary-color);
            margin-top: 0;
        }

        .contact-person p {
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .contact-person {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .contact-person {
                width: 100%;
            }
        }

        /* Estilos para el formulario de encuesta */
        #encuesta {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        #encuesta form {
            display: flex;
            flex-direction: column;
        }

        #encuesta label {
            margin-top: 10px;
            font-weight: bold;
        }

        #encuesta input[type="text"], #encuesta select, #encuesta textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #encuesta .rating {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
        }

        #encuesta .rating input[type="radio"] {
            margin-right: 5px;
        }

        #encuesta button {
            background-color: var(--primary-color);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        #encuesta button:hover {
            background-color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <header>
        <div id="particles-js"></div>
        <h1 class="typing">Competencias para el Ingeniero en Software en el contexto global</h1>
    </header>

    <nav>
        <a href="#inicio">Inicio</a>
        <a href="#competencias">Competencias</a>
        <a href="#formacion-integral">Formación Integral</a>
        <a href="#habilidades">Habilidades</a>
        <a href="#compromiso-personal">Compromiso Personal</a>
        <a href="#testimonios">Testimonios</a>
        <a href="#oportunidades-globales">Oportunidades Globales</a>
        <a href="#contacto">Contacto</a>
        <a href="#encuesta">Encuesta</a>
    </nav>

    <section id="inicio">
        <h2 class="section-title typing">Bienvenido</h2>
        <p>En esta página encontrarás las competencias clave que debe desarrollar un Ingeniero en Software para destacar en el contexto global.</p>
    </section>

    <section id="competencias">
        <h2 class="section-title typing">Competencias requeridas</h2>
        <div class="competencias-container">
            <div class="competencia">
                <div class="competencia-inner">
                    <div class="competencia-front">
                        <img src="https://www.aicad.es/asset/img/3/master-oficial-en-ingenieria-de-software.png" alt="Pensamiento crítico y resolución de problemas">
                    </div>
                    <div class="competencia-back">
                        <div class="code-rain"></div>
                        <h3>Pensamiento crítico y resolución de problemas</h3>
                        <p>Los Ingenieros en Software deben ser capaces de analizar y comprender problemas complejos, descomponerlos en partes manejables y encontrar soluciones efectivas.</p>
                    </div>
                </div>
            </div>
            <div class="competencia">
                <div class="competencia-inner">
                    <div class="competencia-front">
                        <img src="https://www.aicad.es/asset/img/3/master-oficial-en-gestion-de-riesgos-digitales-y-continuidad-de-negocio.png" alt="Innovación y adaptabilidad">
                    </div>
                    <div class="competencia-back">
                        <div class="code-rain"></div>
                        <h3>Innovación y adaptabilidad</h3>
                        <p>En un entorno global y cambiante, los Ingenieros en Software deben ser capaces de adaptarse a nuevas tecnologías y enfoques, y desarrollar soluciones innovadoras para satisfacer las necesidades de los usuarios.</p>
                    </div>
                </div>
            </div>
            <div class="competencia">
                <div class="competencia-inner">
                    <div class="competencia-front">
                        <img src="https://www.aicad.es/asset/img/3/master-oficial-en-digital-transformation.png" alt="Comunicación efectiva">
                    </div>
                    <div class="competencia-back">
                        <div class="code-rain"></div>
                        <h3>Comunicación efectiva</h3>
                        <p>Los Ingenieros en Software deben ser capaces de comunicar de manera clara y concisa, tanto de forma oral como escrita, con diferentes públicos, incluyendo usuarios, clientes y equipos de desarrollo.</p>
                    </div>
                </div>
            </div>
            <div class="competencia">
                <div class="competencia-inner">
                    <div class="competencia-front">
                        <img src="https://www.aicad.es/asset/img/3/te-contamos-por-que-el-trabajo-en-equipo-es-tu-herramienta-del-exito.svg" alt="Trabajo en equipo y colaboración">
                    </div>
                    <div class="competencia-back">
                        <div class="code-rain"></div>
                        <h3>Trabajo en equipo y colaboración</h3>
                        <p>La capacidad de trabajar eficazmente en equipos multidisciplinarios, colaborar con otros profesionales y contribuir al éxito colectivo del proyecto es esencial para los Ingenieros en Software.</p>
                    </div>
                </div>
            </div>
            <div class="competencia">
                <div class="competencia-inner">
                    <div class="competencia-front">
                        <img src="https://www.aicad.es/asset/img/3/master-oficial-en-direccion-de-seguridad-de-la-informacion.png" alt="Aprendizaje continuo">
                    </div>
                    <div class="competencia-back">
                        <div class="code-rain"></div>
                        <h3>Aprendizaje continuo</h3>
                        <p>En un campo en constante evolución, los Ingenieros en Software deben mantener un compromiso con el aprendizaje continuo, actualizando constantemente sus conocimientos y habilidades.</p>
                    </div>
                </div>
            </div>
            <div class="competencia">
                <div class="competencia-inner">
                    <div class="competencia-front">
                        <img src="https://www.aicad.es/asset/img/3/master-oficial-en-diseo-uxui-para-aplicaciones-y-software-.png" alt="Gestión de proyectos">
                    </div>
                    <div class="competencia-back">
                        <div class="code-rain"></div>
                        <h3>Gestión de proyectos</h3>
                        <p>La habilidad para planificar, ejecutar y supervisar proyectos de software, gestionando recursos, plazos y riesgos, es crucial para el éxito en el desarrollo de software.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="formacion-integral">
        <h2 class="section-title typing">Formación Integral</h2>
        <p>La formación de un Ingeniero en Software no se limita únicamente a las competencias técnicas necesarias para el desarrollo de software. Es crucial que estos profesionales también adquieran una serie de habilidades y conocimientos complementarios que les permitan desempeñarse de manera efectiva en un entorno laboral cada vez más dinámico y globalizado.</p>
    </section>

    <section id="habilidades">
        <h2 class="section-title typing">Habilidades del Ingeniero en Software</h2>
        <div class="habilidad">
            <h3>Programación</h3>
            <img src="https://media.giphy.com/media/13HgwGsXF0aiGY/giphy.gif" alt="Programación" class="habilidad-gif">
            <p>La programación es la habilidad fundamental para cualquier ingeniero en software. Implica diseñar, escribir, probar y mantener el código que hace que los programas informáticos funcionen.</p>
        </div>
        <div class="habilidad">
            <h3>Diseño de sistemas</h3>
            <img src="https://media.giphy.com/media/3oKIPEqDGUULpEU0aQ/giphy.gif" alt="Diseño de sistemas" class="habilidad-gif">
            <p>El diseño de sistemas implica planificar y organizar la estructura y la arquitectura de un sistema informático, teniendo en cuenta factores como la escalabilidad, la seguridad y la usabilidad.</p>
        </div>
        <div class="habilidad">
            <h3>Bases de datos</h3>
            <img src="https://media.giphy.com/media/vISmwpBJUNYzukTnVx/giphy.gif" alt="Bases de datos" class="habilidad-gif">
            <p>Las bases de datos son fundamentales para almacenar y gestionar grandes cantidades de datos. Los ingenieros en software deben diseñar y administrar bases de datos eficientes y seguras.</p>
        </div>
        <div class="habilidad">
            <h3>Seguridad informática</h3>
            <img src="https://media.giphy.com/media/3o7WTL4qQCbbLLV2Pm/giphy.gif" alt="Seguridad informática" class="habilidad-gif">
            <p>La seguridad informática es crucial para proteger los sistemas y los datos de los usuarios contra amenazas y vulnerabilidades. Los ingenieros en software deben implementar medidas de seguridad efectivas para prevenir ataques y violaciones de datos.</p>
        </div>
    </section>

    <section id="compromiso-personal">
        <h2 class="section-title typing">Compromiso Personal del Estudiante</h2>
        <div class="compromiso-content">
            <p>Como estudiantes y futuros profesionales del Tecnológico de Antioquia, especialmente en la formación como Ingenieros en Software, asumimos un compromiso personal que va más allá de obtener un título. Este compromiso se refleja en nuestras acciones diarias y está alineado con los principios establecidos en el Proyecto Educativo Institucional (PEI) y el reglamento estudiantil de nuestra institución.</p>
            
            <h3>Compromiso Personal y el PEI</h3>
            <p>El Proyecto Educativo Institucional del Tecnológico de Antioquia establece una visión clara sobre la formación integral que buscamos. Nos invita a ser líderes en nuestra comunidad, promoviendo valores como:</p>
            <ul>
                <li><strong>Responsabilidad:</strong> Cumplir con nuestras obligaciones académicas y profesionales de manera diligente y comprometida.</li>
                <li><strong>Ética:</strong> Actuar con integridad en todos nuestros proyectos y decisiones.</li>
                <li><strong>Trabajo en equipo:</strong> Colaborar con nuestros compañeros para alcanzar objetivos comunes.</li>
            </ul>

            <h3>Reglamento Estudiantil</h3>
            <p>El reglamento estudiantil guía nuestro comportamiento dentro del Tecnológico de Antioquia, promoviendo un ambiente de respeto y convivencia. Aspectos clave incluyen:</p>
            <ul>
                <li><strong>Respeto a la diversidad:</strong> Fomentar un ambiente inclusivo para todos los estudiantes.</li>
                <li><strong>Compromiso académico:</strong> Asistir a clases, participar activamente y cumplir con las tareas asignadas.</li>
                <li><strong>Conducta ética:</strong> Mantener la honestidad académica y profesional en todas nuestras actividades.</li>
            </ul>

            <h3>Aplicación en la Ingeniería de Software</h3>
            <p>Como estudiantes de Ingeniería en Software, aplicamos estos principios en nuestra futura práctica profesional mediante:</p>
            <ul>
                <li><strong>Desarrollo de software ético:</strong> Crear soluciones tecnológicas que respeten la privacidad y los derechos de los usuarios.</li>
                <li><strong>Innovación social:</strong> Utilizar nuestras habilidades para resolver problemas reales en nuestra comunidad.</li>
                <li><strong>Colaboración interdisciplinaria:</strong> Trabajar con otros profesionales para desarrollar proyectos de impacto positivo.</li>
            </ul>
        </div>
    </section>

    <section id="testimonios">
        <h2 class="section-title typing">Testimonios de Grandes Programadores</h2>
        <div class="testimonial">
            <p>"El software es un gran combinador: atrae a muchas personas de diferentes áreas con diferentes antecedentes y con diferentes formas de pensar."</p>
            <p class="testimonial-author">- Bill Gates, Cofundador de Microsoft</p>
        </div>
        <div class="testimonial">
            <p>"Los buenos programadores usan sus cerebros, pero las buenas pautas salvan nuestros cerebros para cuando realmente los necesitamos."</p>
            <p class="testimonial-author">- Steve McConnell, Autor de "Code Complete"</p>
        </div>
        <div class="testimonial">
            <p>"La programación no se trata de lo que sabes; se trata de lo que puedes averiguar."</p>
            <p class="testimonial-author">- Chris Pine, Autor de "Learn to Program"</p>
        </div>
    </section>

    <section id="oportunidades-globales">
        <h2 class="section-title typing">Oportunidades Globales para Ingenieros en Software</h2>
        <div class="global-opportunity">
            <h3>Desarrollo de Software en la Nube</h3>
            <p>La demanda de ingenieros especializados en tecnologías cloud como AWS, Azure y Google Cloud sigue creciendo a nivel mundial.</p>
        </div>
        <div class="global-opportunity">
            <h3>Inteligencia Artificial y Aprendizaje Automático</h3>
            <p>Las empresas buscan ingenieros capaces de desarrollar y mantener sistemas de IA y ML para diversos sectores, desde la salud hasta las finanzas.</p>
        </div>
        <div class="global-opportunity">
            <h3>Desarrollo de Aplicaciones Móviles</h3>
            <p>Con la creciente dependencia de los dispositivos móviles, los desarrolladores de apps para iOS y Android tienen amplias oportunidades en el mercado global.</p>
        </div>
        <div class="global-opportunity">
            <h3>Ciberseguridad</h3>
            <p>La protección de datos y sistemas es crucial en la era digital, creando una alta demanda de ingenieros especializados en seguridad informática.</p>
        </div>
    </section>

    <section id="contacto">
        <h2 class="section-title typing">Contacto</h2>
        <p>Si tienes alguna pregunta o deseas más información, no dudes en contactarnos:</p>
        <div class="contact-info">
            <div class="contact-person">
                <h3>Julián Suárez</h3>
                <p>Correo electrónico: Julian.suarez53@correo.tdea.edu.co</p>
                <p>Teléfono: +57 313 426 8251</p>
            </div>
            <div class="contact-person">
                <h3>Juan Vélez</h3>
                <p>Correo electrónico: juan.velez19@correo.tdea.edu.co</p>
                <p>Teléfono: +57 312 709 9711</p>
            </div>
            <div class="contact-person">
                <h3>Jeison Montoya</h3>
                <p>Correo electrónico: jeison.montoya@correo.tdea.edu.co</p>
                <p>Teléfono: +57 301 256 2562</p>
            </div>
        </div>
    </section>

    <section id="encuesta">
    <h2 class="section-title typing">Encuesta de Satisfacción</h2>
    <form id="satisfactionForm" method="post">
        <label for="clientName">Nombre</label>
        <input type="text" id="clientName" name="clientName" required>

        <label for="documentPerson">Documento</label>
        <input type="text" id="documentPerson" name="documentPerson" required>

        <label for="position">Cargo (Estudiante - Profesor)</label>
        <input type="text" id="position" name="position" required>

        <h3>Su opinión nos importa</h3>
        <p>¿Cuál es su opinión sobre los siguientes aspectos de nuestra gestión?</p>

        <label>¿Cómo te pareció la página web?</label>
        <div class="rating">
            <span><input type="radio" name="productQuality" value="1" required> Malo</span>
            <span><input type="radio" name="productQuality" value="2"> Regular</span>
            <span><input type="radio" name="productQuality" value="3"> Bueno</span>
            <span><input type="radio" name="productQuality" value="4"> Muy Bueno</span>
            <span><input type="radio" name="productQuality" value="5"> Excelente</span>
        </div>

        <label>Nivel con el cual esta información satisface sus necesidades</label>
        <div class="rating">
            <span><input type="radio" name="serviceSatisfaction" value="1" required> Malo</span>
            <span><input type="radio" name="serviceSatisfaction" value="2"> Regular</span>
            <span><input type="radio" name="serviceSatisfaction" value="3"> Bueno</span>
            <span><input type="radio" name="serviceSatisfaction" value="4"> Muy Bueno</span>
            <span><input type="radio" name="serviceSatisfaction" value="5"> Excelente</span>
        </div>

        <label>¿Nos contratarías para hacer tu página web?</label>
        <div class="rating">
            <span><input type="radio" name="responseTime" value="1" required> Si</span>
            <span><input type="radio" name="responseTime" value="2"> Obvio</span>
            <span><input type="radio" name="responseTime" value="3"> Definitivamente</span>
            <span><input type="radio" name="responseTime" value="4"> Por supuesto</span>
            <span><input type="radio" name="responseTime" value="5"> Yes</span>
        </div>

        <label for="comments">Comentarios adicionales</label>
        <textarea id="comments" name="comments" rows="4"></textarea>

        <button type="submit" name="submit">Enviar Encuesta</button>
    </form>
    <div id="responseMessage"></div>
</section>

    <footer>
        <p>&copy; TdeA 2024 Competencias para el Ingeniero en Software. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // Animación de partículas en el encabezado
        particlesJS("particles-js", {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#ffffff" },
                shape: { type: "circle", stroke: { width: 0, color: "#000000" }, polygon: { nb_sides: 5 } },
                opacity: { value: 0.5, random: false, anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false } },
                size: { value: 3, random: true, anim: { enable: false, speed: 40, size_min: 0.1, sync: false } },
                line_linked: { enable: true, distance: 150, color: "#ffffff", opacity: 0.4, width: 1 },
                move: { enable: true, speed: 6, direction: "none", random: false, straight: false, out_mode: "out", bounce: false, attract: { enable: false, rotateX: 600, rotateY: 1200 } }
            },
            interactivity: {
                detect_on: "canvas",
                events: { onhover: { enable: true, mode: "repulse" }, onclick: { enable: true, mode: "push" }, resize: true },
                modes: { grab: { distance: 400, line_linked: { opacity: 1 } }, bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 }, repulse: { distance: 200, duration: 0.4 }, push: { particles_nb: 4 }, remove: { particles_nb: 2 } }
            },
            retina_detect: true
        });

        // Desplazamiento suave
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animación de aparición de competencias
        const competencias = document.querySelectorAll('.competencia');
        competencias.forEach(competencia => {
            competencia.addEventListener('click', () => {
                competencia.classList.toggle('active');
            });
        });

        // Animación de barras de habilidades
        const habilidades = document.querySelectorAll('.habilidad-progreso');
        const habilidadesObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const width = entry.target.getAttribute('data-width');
                    entry.target.style.width = width;
                }
            });
        }, { threshold: 0.5 });

        habilidades.forEach(habilidad => {
            habilidadesObserver.observe(habilidad);
        });

        // Efecto de escritura para los títulos de las secciones
        const titles = document.querySelectorAll('.typing');
        titles.forEach(title => {
            title.style.width = '0';
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.width = '100%';
                    }
                });
            }, { threshold: 0.5 });
            observer.observe(title);
        });

        // Animación de lluvia de código
        function createCodeRain() {
            const codeRainElements = document.querySelectorAll('.code-rain');
            codeRainElements.forEach(element => {
                let rain = '';
                for (let i = 0; i < 15; i++) {
                    const left = Math.random() * 100;
                    const animationDuration = 5 + Math.random() * 5;
                    const animationDelay = Math.random() * 5;
                    rain += `<div style="position: absolute; left: ${left}%; animation: code-rain ${animationDuration}s linear ${animationDelay}s infinite;">01</div>`;
                }
                element.innerHTML = rain;
            });
        }

        createCodeRain();

        // Nuevo JavaScript para la rotación de testimonios
        const testimonials = document.querySelectorAll('.testimonial');
        let currentTestimonial = 0;

        function rotateTestimonials() {
            testimonials[currentTestimonial].style.display = 'none';
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            testimonials[currentTestimonial].style.display = 'block';
        }

        // Inicialmente, oculta todos los testimonios excepto el primero.
        for (let i = 1; i < testimonials.length; i++) {
            testimonials[i].style.display = 'none';
        }

        // Rotar testimonios cada 5 segundos
        setInterval(rotateTestimonials, 5000);

        // Animación para oportunidades globales
        const opportunities = document.querySelectorAll('.global-opportunity');
        const opportunitiesObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.5 });

        opportunities.forEach(opportunity => {
            opportunity.style.opacity = 0;
            opportunity.style.transform = 'translateY(20px)';
            opportunity.style.transition = 'opacity 0.5s, transform 0.5s';
            opportunitiesObserver.observe(opportunity);
        });
    </script>

    <script>
    document.getElementById('satisfactionForm').addEventListener('submit', function(event) {
        event.preventDefault(); 

        var formData = new FormData(this);

        fetch('registrar.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            var responseMessage = document.getElementById('responseMessage');
            if (data.success) {
                responseMessage.innerHTML = "<h3 class='Ok'>¡Respuesta enviada correctamente!</h3>";
                document.getElementById('satisfactionForm').reset(); // Limpia el formulario
            } else {
                responseMessage.innerHTML = "<h3 class='Bad'>¡Ups, ha ocurrido un error! " + data.message + "</h3>";
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
    </script>
    
</body>
</html>