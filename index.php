<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Llamado al css del presente HTML-->
    <link rel="stylesheet" href="css/style.css">
    <!--Titulo del sitio web-->
    <title>P&A Inmobiliaria</title>
    <link rel="shorcut icon" href="style/images/logo.svg" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    
    <header>

        <div class="navbar">
            <h1 class="logo"> P&A Inmobiliaria</h1>
            <nav class="nav_links">
                <a href="">Nosotros</a>
                <a href="">Anuncios</a>
                <a href="">Blog</a>
                <a href="">Contacto</a>
                <a href="">Portal admin</a>
            </nav>
        </div>
        <div class="msg">
            <h1>Encuentre la propiedad de sus sueños.</h1>
            <p>En P&A Inmobiliaria, ayudamos a nuestros clientes a encontrar el hogar perfecto. Ofrecemos una amplia gama de servicios de venta y administración de inmuebles, para que pueda encontrar la propiedad que necesita, ya sea para vivir, invertir o alquilar. <br><br> ¿Busca una casa? ¿Un apartamento? ¿Una finca?</p>
        </div>

    </header>

    <!------- NOSOTROS ------->
    <section id="sobre_nosotros">
        <h2>Más Sobre Nosotros</h2>
        <div>
            <img src="./img/icono1.svg" alt="icono de un candado">
            <h3>SEGURIDAD</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia voluptas pariatur? Non,
                repudiandae sed vero perspiciatis sequi quod! Excepturi sunt asperiores hic. Eligendi dolorem ex,
                fuga aut officia inventore?</p>
        </div>
        <div>
            <img src="./img/icono2.svg" alt="icono de billetes dinero">
            <h3>EL MEJOR PRECIO</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia voluptas pariatur? Non,
                repudiandae sed vero perspiciatis sequi quod! Excepturi sunt asperiores hic. Eligendi dolorem ex,
                fuga aut officia inventore?</p>
        </div>
        <div>
            <img src="./img/icono3.svg" alt="icono de un reloj">
            <h3>A TIEMPO</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia voluptas pariatur? Non,
                repudiandae sed vero perspiciatis sequi quod! Excepturi sunt asperiores hic. Eligendi dolorem ex,
                fuga aut officia inventore?</p>
        </div>

    </section>

    <!------- SERVICIOS ------->
    <section id="servicios">
        <h2>Nuestros servicios</h2>
        <div>
            <img src="./img/icono-venta.png" alt="icono venta">
            <h3>VENTA</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia voluptas pariatur? Non,
                repudiandae sed vero perspiciatis sequi quod! Excepturi sunt asperiores hic. Eligendi dolorem ex,
                fuga aut officia inventore?</p>
        </div>
        <div>
            <img src="./img/icono-arriendo.png" alt="icono arriendo">
            <h3>ARRIENDO</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia voluptas pariatur? Non,
                repudiandae sed vero perspiciatis sequi quod! Excepturi sunt asperiores hic. Eligendi dolorem ex,
                fuga aut officia inventore?</p>
        </div>
        <div>
            <img src="./img/icono-avaluo.png" alt="icono de avaluos">
            <h3>AVALÚOS</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia voluptas pariatur? Non,
                repudiandae sed vero perspiciatis sequi quod! Excepturi sunt asperiores hic. Eligendi dolorem ex,
                fuga aut officia inventore?</p>
        </div>

    </section>

    <!------- CASAS Y DEPAS EN VENTA ------->

    <section id="casas_en_venta">
        <h2>Casas, apartamentos y mas...</h2>

        <div id="anuncios">

            <!------- Anuncio 1 ------->
            <div class="anuncio">
                <img src="./img/anuncio1.jpg" alt="">
                <h3>Casa moderna</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                <p class="precio">$1'300,000,000.</p>

                <div class="iconos">
                    <img src="./img/icono_wc.svg" alt=""> <span>3</span>
                    <img src="./img/icono_estacionamiento.svg" alt=""> <span>3</span>
                    <img src="./img/icono_dormitorio.svg" alt=""> <span>2</span>
                </div>

                <button>VER PROPIEDAD</button>
            </div>

            <!------- Anuncio 2 ------->
            <div class="anuncio">
                <img src="./img/anuncio2.jpg" alt="">
                <h3>Casa terminados de Lujo</h3>
                <p>Casa con diseño moderno, así como tecnología inteligente y amueblada.</p>
                <p class="precio">$2'500,000,000.</p>

                <div class="iconos">
                    <img src="./img/icono_wc.svg" alt=""> <span>3</span>
                    <img src="./img/icono_estacionamiento.svg" alt=""> <span>3</span>
                    <img src="./img/icono_dormitorio.svg" alt=""> <span>2</span>
                </div>

                <button>VER PROPIEDAD</button>
            </div>

            <!------- Anuncio 3 ------->
            <div class="anuncio">
                <img src="./img/anuncio3.jpg" alt="">
                <h3>Casa con Piscina</h3>
                <p>Casa con psicina y acabados de lujo en La Mesa, Cundinamarca, excelente oportunidad.</p>
                <p class="precio"> $3'000,000,000.</p>

                <div class="iconos">
                    <img src="./img/icono_wc.svg" alt=""> <span>3</span>
                    <img src="./img/icono_estacionamiento.svg" alt=""> <span>3</span>
                    <img src="./img/icono_dormitorio.svg" alt=""> <span>2</span>
                </div>

                <button>VER PROPIEDAD</button>
            </div>
        </div>

        <div class="btn-todas">
            <button>VER TODAS</button>
        </div>

    </section>

    <!------- ENCUENTRA LA CASA DE TUS SUEÑOS ------->

    <section>
        <div id="casa_sueños">
            <h1>Encuentra la casa de tus sueños</h1>
            <p>Llená el formulario de Contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
            <button>CONTÁCTANOS</button>
        </div>

    </section>

    <!------- BLOG  ------->

    <section id="ultima_seccion">
        <div id="nuestro_blog">
            <h1>Nuestro Blog</h1>

            <div class="entrada_blog">
                <img src="./img/blog1.jpg" alt="">
                <div>
                    <h1>Terraza en el techo de tu casa</h1>
                    <div class="linea"></div>
                    <p>Escrito el:<span>20/10/19</span> por:<span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa, on los mejores materiales y ahorrando dinero.</p>
                </div>
            </div>

            <div class="entrada_blog">
                <img src="./img/blog2.jpg" alt="">
                <div>
                    <h1>Guía para la decoración de tu hogar</h1>
                    <div class="linea"></div>
                    <p>Escrito el:<span>20/10/19</span> por:<span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                </div>
            </div>

        </div>

        <div id="testimoniales">
            <h1>Testimoniales</h1>
            <div>
                <i class="fas fa-quote-left"></i>
                <p> El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                    <span>- Juan de la Torre</span>
                </p>
            </div>

        </div>

    </section>



    <!------- FOOTER ------->
    <footer>
        <div class="footer">
            <div class="row">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <div class="row">
                <ul>
                    <li><a href="">Nosotros</a></li>
                    <li><a href="#">Nuestros servicios</a></li>
                    <li><a href="#">Politica de privacidad</a></li>
                    <li><a href="#">Terminos y condiciones</a></li>
                </ul>
            </div>

            <div class="row">
                Copyright © 2023 P&A Inmobiliaria - Todos los derechos reservados
            </div>
        </div>
    </footer>




</body>

</html>

