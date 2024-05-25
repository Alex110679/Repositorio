

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taller</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel= "stylesheet">
    <link rel="stylesheet" href="https://fontawesome.com/icons">
    <script src="https://kit.fontawesome.com/0edcb68a70.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--MENU--->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="login.php" class="neon-text">Alexander</a>
            </div>
            <nav id="nav" class="">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE_MI</a></li>
                    <li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
                    <li><a href="#estudio" onclick="seleccionar()">ESTUDIO</a></li>
                    <li><a href="#portafolio" onclick="seleccionar()">PORTAFOLIO</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                    <li><a href="login.php" onclick="seleccionar()">ADMINISTRACIÓN</a></li>
                    <div class="animation start-home"></div>
                </ul>
                

            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>
    
        <!--INICIO DE SECCION--->
        <section id="inicio" class="inicio">
            <div class="contenido-banner">
                <div class="contenedor-img">
                    <img src="imagenes/imagen2.png" alt="">
                </div>
                <h1>ALEXANDER HIGUERA</h1>
                <H2>Estudiante de Ingenieria de Sistemas y Software</H2>
                <div class="redes">
                    <a href="#"><i class="bx bxl-facebook"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                    <a href="#"><i class="bx bxl-youtube"></i></a>
                    <a href="#"><i class="bx bxl-whatsapp"></i></a>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                </div>
            </div>
        </section>
        <!--SECCION SOBRE MI-->
        <section id="sobremi" class="sobremi">
            <div class="contenido-seccion">
                <h2>Sobre Mí</h2>
                <p><span>Hola, soy Alexander Higuera Paz.</span> tengo 44 años, soy de Bogotá, 
                    actualmente vivo en Girardot desde hace siete años, en mis 
                    ratos libres me gusta ver una buena pelicula o escuchar 
                    musica en especial la salsa o Bachata entre otras, practico
                    algunos deportes como el futbol y la natación, por otro lado me 
                    encuentro cursando cuarto semestre de Ingenieria de 
                    Sistemas en la Corporacion Universitaria Minuto de Dios
                    sede Girardot.</p>

                    <div class="fila">
                        <!-- datos personales-->
                        <div class="col">
                            <h3>Datos personales</h3>
                            <ul>
                                <li>
                                    <strong>Cumpleaños</strong>
                                    11-06-1979
                                </li>
                                <li>
                                    <strong>Teléfono</strong>
                                    311-4661605
                                </li>
                                <li>
                                    <strong>Email</strong>
                                    alexander.higuera@uniminuto.edu.co
                                </li>
                                <li>
                                    <strong>Direccion</strong>
                                    Conjunto el Nogal casa L6, Girardot
                                </li>
                                <li>
                                    <strong>ocupación</strong>
                                    Pensionado <span> POLICIA </span>
                                </li>
                            </ul>
                        </div>

                        <!--intereses-->
                        <div class="col">
                            <H3>Destrezas</H3>
                            <div class="contenedor-intereses">
                                <div class="intereses">
                                    <!--<i class="fa-brands fa-python"></i>-->
                                    <span></span>
                                    <span></span><span></span><span></span>
                                    <i class="fa-brands fa-python"></i>
                                    PYTHON
                                </div>

                                <div class="intereses">
                                    <!--<i class="fa-brands fa-python"></i>-->
                                    <span></span>
                                    <span></span><span></span><span></span>
                                    <i class="fa-solid fa-database"></i>
                                    MYSQL
                                </div>

                                <div class="intereses">
                                    <!--<i class="fa-brands fa-python"></i>-->
                                    <span></span>
                                    <span></span><span></span><span></span>
                                    <i class="fa-brands fa-html5"></i>
                                    HTML
                                </div>

                                <div class="intereses">
                                    <!--<i class="fa-brands fa-python"></i>-->
                                    <span></span>
                                    <span></span><span></span><span></span>
                                    <i class="fa-brands fa-css3-alt"></i>
                                    CSS
                                </div>

                                <div class="intereses">
                                    <!--<i class="fa-brands fa-python"></i>-->
                                    <span></span>
                                    <span></span><span></span><span></span>
                                    <i class="fa-brands fa-php"></i>
                                    PHP
                                </div>

                                <div class="intereses">
                                    <!--<i class="fa-brands fa-python"></i>-->
                                    <span></span>
                                    <span></span><span></span><span></span>
                                    <i class="fa-brands fa-figma"></i>
                                    FIGMA
                                </div>

                                
                            </div>

                        </div>
                    </div>
                        <button>
                            Descargar CV <i class="fa-solid fa-download"></i>
                            <span class="overlay"></span>
                        </button>
            </div>

        </section>

        <!--SECCION skills--->
        <section class="skills" id="skills">
            <div class="Contenido-seccion">
                <h2>Skills</h2>
                <div class="fila">
                    <!--Profesional Skills--->
                    <div class="col">
                        <h3>Profesional Skills</h3>
                        <div class="skill">
                            <span> Comunicación</span>
                            <div class="barra-skill">
                                <div class="progreso comunicacion">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <span>Trabajo en Equipo</span>
                            <div class="barra-skill">
                                <div class="progreso trabajo">
                                    <span>85%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <span>Creatividad</span>
                            <div class="barra-skill">
                                <div class="progreso creatividad">
                                    <span>85%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <span>Dedicación</span>
                            <div class="barra-skill">
                                <div class="progreso dedicacion">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <span>Puntualidad</span>
                            <div class="barra-skill">
                                <div class="progreso puntualidad">
                                    <span>97%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <span>Responsabilidad</span>
                            <div class="barra-skill">
                                <div class="progreso responsabilidad">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <!--SECCION CURRICULUM-->
        <section id="curriculum" class="curriculum">
            <div class="contenido-seccion">
                <h2>Curriculum</h2>
                <div class="fila">
                    <div class="col izquierda">
                        <h3>Educacion</h3>
                        <div class="item izq">
                            <h4>Patrullero</h4>
                            <span class="casa">Escuela Suboficiales Gonzalo Jimenez de Quesada </span>
                            <span class="fecha">1997</span>
                            <p>Ingreso a la escuela de Suboficiales Gonzalo Jimenez de Quesada, es alli donde adelanto curso para el grado de Patrullero, duracion un año, termino del curso 20 de febrero de 1998.</p>
                            
                            <div class="conectori">
                                <div class="circuloi"></div>
                            </div>
                        </div>

                        <div class="item izq">
                            <h4>Basico de Policia Judicial</h4>
                            <span class="casa">SIJIN</span>
                            <span class="fecha">2011</span>
                            <p>Realizo curso en las instalaciones de la Sijin en Bogotá, durante dos meses recibo clases como dactiloscopia, documentologia y Balistica, curso que se realiza con el fin de que los procedimientos investigativos sean lo mas correctos tal como lo dice la norma.</p>
                            <div class="conectori">
                                <div class="circuloi"></div>
                            </div>
                        </div>

                        <div class="item izq">
                            <h4>Mando y Control</h4>
                            <span class="casa">Universidad Catolica</span>
                            <span class="fecha">2010</span>
                            <p>Al adelantar curso de ascenso al grado de Subintendente como requisito primordial la Policia Nacional, lo envia a realizar dicho curso en la Universida Catolica de Colombia.</p>
                            <div class="conectori">
                                <div class="circuloi"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col derecha">
                        <h3>Policia Nacional</h3>
                        <div class="item der">
                            <h4>Patrullero</h4>
                            <span class="casa">Vigilancia</span>
                            <span class="fecha">1998 - 2010</span>
                            <p>Durante este periodo labore en diferentes lugares de Bogotá como son: Carcel la Picota(Alta seguridad), Unidad Permanente de Justicia (UPJ) y por ultimo Estacion de Policia SUBA - CAI AURES.</p>
                            <div class="conectord">
                                <div class="circulod"></div>
                            </div>
                        </div>

                        <div class="item der">
                            <h4>Subintendente</h4>
                            <span class="casa">Gaula</span>
                            <span class="fecha">2011-2016</span>
                            <p>Durante este periodo y laborando en el GAULA POLCIA, estuve en diferentes partes como Gaula cartagena, Gaula Santa Marta y Gaula Fusagasuga.</p>
                            <div class="conectord">
                                <div class="circulod"></div>
                            </div>
                        </div>

                        <div class="item der">
                            <h4>Intendente</h4>
                            <span class="casa">Gaula</span>
                            <span class="fecha">2011-2019</span>
                            <p>Durante este periodo labore en el Gaula Fusagasuga como ultima unidad, en ese momento tuve el cargo de jefe de la Ubase Girardot, para el 2019 por decision propia y a voluntad me retiro despues de haber laborado por mas de 23 años y hoy en dia disfruto de una asignacion de retiro o pension. </p>
                            <div class="conectord">
                                <div class="circulod"></div>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <!--SECCION ESTUDIOS Y EXPERIENCIA -->
        <section class="estudio" id="estudio">
            <div class="contenedor">
                <h2 class="titulo">ESTUDIOS Y EXPERIENCIA</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="imagenes/ilustracion1.jpeg" alt="">
                        <h3>Uniminuto</h3>
                        <p>Estudiante de Ingeniería de Sistemas - 4to Semestre, Universidad Uniminuto</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="imagenes/ilustracion4.jpeg" alt="">
                        <h3>U Cundinamarca</h3>
                        <p>Estudiante de Ingeniería de Software - 1er Semestre, Universidad Cundinamarca</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="imagenes/ilustracion3.jpeg" alt="">
                        <h3>Policia Nacional</h3>
                        <p>Experiencia Laboral - 24 Años en la Policía Nacional</p>
                    </div>
                </div>
            </div>
        </section>



        <!--SECCION PORTAFOLIO-->
        <section id="portafolio" class="portafolio">
            <div class="contenido-seccion">
                <h2>PORTAFOLIO</h2>
                <div class="galeria">
                    <div class="proyecto">
                        <img src="imagenes/escudo.jpg" alt="">
                        <div class="overlay">
                            <h3>Investigador Criminal</h3>
                            <p>GAULA</p>
                        </div>
                    </div>

                    <div class="proyecto">
                        <img src="imagenes/escudo.jpg" alt="">
                        <div class="overlay">
                            <h3>Criminologico</h3>
                            <p>GAULA</p>
                        </div>
                    </div>

                    <div class="proyecto">
                        <img src="imagenes/escudo.jpg" alt="">
                        <div class="overlay">
                            <h3>Recolector Evidencias y EMP</h3>
                            <p>GAULA</p>
                        </div>
                    </div>
                    
                    <div class="proyecto">
                        <img src="imagenes/escudo.jpg" alt="">
                        <div class="overlay">
                            <h3>Tecnicas Avanzadas de Entrevista</h3>
                            <p>GAULA</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        

        <!--SECCION CONTACTO-->
        <section id="contacto" class="contacto">
            <div class="contenido-seccion">
                <h2>CONTACTO</h2>
                <div class="fila">
                <!--formulario--> 
                <div class="col">
                    <input type="text" placeholder="Tú Nombre"> 
                    <input type="text" placeholder="Número teléfonico"> 
                    <input type="text" placeholder="Dirección de correo"> 
                    <input type="text" placeholder="Tema">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>  
                    <button>
                        Enviar Mensaje<i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
                </div>
                <!--mapa-->
                <div class="col">
                    <img src="imagenes/ubicacion1.jpeg" alt="">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                Colombia, Girardot 
                            </li>
                            <li>
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                Cel. 3114661605
                            </li>
                            
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                Email. alexh-042@gmail.com
                            </li>
                        </ul>

                    </div>
                </div>
                </div>
            </div>

        </section>

        <!--SECCION FOOTER-->
        <footer>
            <a href="#inicio" class="arriba">
                <i class="fa-solid fa-angles-up"></i>
            </a>
            <div class="redes">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
                <a href="#"><i class="bx bxl-youtube"></i></a>
                <a href="#"><i class="bx bxl-whatsapp"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <h3>©2024 Alexander Higuera Paz</h3>
                <h3>alexander.higuera@uniminuto.edu.co</h3>
            </div>
            
        </footer>

        <script src="js/java.js"></script>
</body>
</html>