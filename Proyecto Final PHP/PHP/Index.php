<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heracles</title> 
    <link rel="shortcut icon" href="../assets/Img/LogoPng.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/Css/Index.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <script src="../assets/Js/cardCarousel.js" defer></script>
    <!--Script iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<body>
    <header id="header">
        
            <a href="Index.php"><h2 class="Logo"><img src="../assets/Img/LogoMejorado.png" alt="">Heracles</h2></a>
            
        <nav id="menuH">    

                <a href="Index.php"class="mH">Inicio</a>
                <a href="Product.php"class="mH">Productos</a>
                <a href="ServicioCliente.php"class="mH">Servicio al cliente</a>
                <a href="AboutUs.php" class="mH"class="mH">Acerca de nosotros</a>
                <a href="Login.php" class="mH Login">Login</a>
        </nav>

    </header>

    <main id="container">
        <div class="container-Slide">
            <div class="tabs">
                
                <input id="uno" type="radio" name="slider">
                <input id="dos" type="radio" name="slider">
                <input id="tres" type="radio" name="slider">
                <!-- <input id="cuatro" type="radio" name="slider">
                <input id="cinco" type="radio" name="slider">
                <input id="seis" type="radio" name="slider"> -->

            <div class="buttons">
                <label for="uno"></label>
                <label for="dos"></label>
                <label for="tres"></label>
                <!-- <label for="cuatro"></label>
                <label for="cinco"></label>
                <label for="seis"></label> -->
            </div>
            
                <div class="content-slide">
                    
                    <div class="box uno">
                        <video src="../assets/Videos/VideoBackground.mp4" autoplay muted loop></video>
                            <img src="../assets/Img/ImgIndex.png" alt="">
                        <div class="figure"></div>
                            <div class="content-box">
                                <h2>Tu comodidad es nuestra prioridad</h2>
                                <p class="text-slide">  
                                    Explora nuestra amplia selección de calzado y ropa, diseñados con tecnologías innovadoras para brindarte la mejor experiencia en cada movimiento. Desde amortiguación superior en nuestros zapatos hasta telas transpirables y suaves en nuestras prendas, todo ha sido cuidadosamente diseñado para que te sientas cómodo/a y con confianza en cada paso del camino.                                </p>
                            </div>
                        
                    </div>

                    <div class="box dos">
                        <h2 class="nuevo">Nuevo</h2>
                        <div class="container-imgBox">
                        <img src="../assets/Img/OfertaTenis.png" alt="">
                    </div>
                        <h2>Ofertas disponibles entre el 28 al 31 de julio</h2> 
                    <div class="content-oferta">
                        <h3>Heracles NDA 4</h3>
                        <span>RD$ 1,090.00</span>
                    </div>

                    </div>

                    <div class="box tres">
                        <div class="container-imgBox">
                        <img src="../assets/Img/Redes-sociales.jpg" alt="">
                    </div>
                        <div class="content-box">
                            <h3>Pasate por nuestas redes sociales para poder
                                ver la gran variedad de contenido que les ofrecemos
                                 a nuestros clientes y mantenerte actualizado con nuestras ofertas

                            </h3>
                        </div>
                    </div>

                    <!-- <div class="box cuatro">

                    </div>

                    <div class="box cinco">

                    </div>

                    <div class="box seis">

                    </div> -->

                </div>
            
        </div>
    </div>
    <div class="contenedor-small">
        <div class="contenedor-mensaje">

            <div class="poliImg"></div>

            <div class="contenidoMj">
                
            <h2 class="title">
                Bienvenido a nuestra tienda online!
            </h2>
            
                <p class="text">Explora nuestro extenso catálogo de productos deportivos diseñados para brindarte la máxima comodidad en cada paso. Desde calzado ligero y ergonómico hasta prendas suaves y transpirables, en Heracles encontrarás todo lo que necesitas para disfrutar de la comodidad durante tus actividades deportivas y tu día a día.
                    <br><br>
                    Nuestra dedicación a la innovación y el diseño nos permite ofrecerte productos que se adaptan perfectamente a tu cuerpo y movimientos, para que te sientas libre y cómodo/a en cualquier situación.
                    </p>
            </div>

        </div>
    </div>

                                    <!--Categoria de productos-->
    <div class="contenedor-Card">
        
        <h2 class="title">Categoria de productos</h2>
        <div class="wrapper">
            <ion-icon id="left" name="chevron-back-outline" class="btnFlecha"></ion-icon>
            <ul class="carousel">
            <li class="card">
                <div class="imgCard"><img src="../assets/Img/T-Shirt.png" alt="img" draggable="false"></div>
                <h2>T-Shirt</h2>
                    <a href="Product.php#T-Shirt" onclick="cambiarCatalogo()" class="btnVer"><span>Ver</span></a>
            </li>
            <li class="card">
                <div class="imgCard"><img src="../assets/Img/Sudadera.png" alt="img" draggable="false"></div>
                <h2>Sudaderas</h2>
                    <a href="#"class="btnVer" ><span>Ver</span></a>
            </li>            
            <li class="card"> 
                <div class="imgCard"><img src="../assets/Img/Jogger.png" alt="img" draggable="false"></div>
                <h2>Joggers</h2>
                    <a href="#"class="btnVer"><span>Ver</span></a>
            </li>            
            <li class="card">
                <div class="imgCard"><img src="../assets/Img/Leggins.png" alt="img" draggable="false"></div>
                <h2>Leggins</h2>
                    <a href="#"class="btnVer"><span>Ver</span></a>
            </li>
            <li class="card">
                <div class="imgCard"><img src="../assets/Img/TenisWhite.jpeg" alt="img" draggable="false"></div>
                <h2>Tenis</h2>
                    <a href="#"class="btnVer"><span>Ver</span></a>
            </li>
            <li class="card">
                <div class="imgCard"><img src="../assets/Img/GorraPort.jpeg" alt="img" draggable="false"></div>
                <h2>Gorras</h2>
                    <a href="#"class="btnVer"><span>Ver</span></a>
            </li>
            <li class="card">
                <div class="imgCard"><img src="../assets/Img/Cangurera.png" alt="img" draggable="false"></div>
                <h2>Accesorios</h2>
                    <a href="#"class="btnVer"><span>Ver</span></a>
        </li>          
        <li class="card">
            <div class="imgCard"><img src="../assets/Img/Bolsogym.png" alt="img" draggable="false"></div>
            <h2>Equipamiento</h2>

                <a href="#" class="btnVer"><span>Ver</span></a>

        </li>
    </ul>
    <ion-icon id="rigth" name="chevron-forward-outline" class="btnFlecha"></div>        
</div>

<div class="container-new">

    <img src="../assets/Img/JoggerBlackWomen.png" alt="" draggable="false">

    <div class="contenido-news">
        <h2 class="title-news">Nuevo producto</h2>
        <h3 class="subTitle-news">Unisex fleece sweatpants</h3>        
        <p class="text-news">Déjate inspirar por la cultura del Streetwear y ofrece a tus clientes este pantalón de chándal unisex
            único. Tiene 3 bolsillos espaciosos: 2 bolsillos delanteros en los laterales y un bolsillo trasero en la
            pierna derecha. ¡Ideal para guardar tu móvil o tu cartera!
            </p>
    </div>
</div>

<footer>
    <div class="enlaces-footer">
    <div class="container-footer">
        
            <h2 class="title-footer">Contactenos</h2>
            <ul>
                <li><a href="   https://instagram.com/hera.cle.s?igshid=MzRlODBiNWFlZA==">Instagram<ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="https://www.tiktok.com/@he.racles?_t=8eLa6lXEYDO&_r=1">Tik Tok<ion-icon name="logo-tiktok"></ion-icon></a></li>
            </ul>
        </div>
        <hr class="divide-line">
        <div class="container-footer">
            <h2 class="title-footer">Explora</h2>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="Product.php">Productos</a></li>
                <li><a href="ServicioCliente.php">Servicio al cliente</a></li>
                <li><a href="AboutUs.php">Acerca de nosotros</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </div>
        <div class="container-footer">
            <h2 class="title-footer">Proximamente</h2>
            <ul>
                <li><a href="#">Nuevos productos</a></li>
                <li><a href="#">Diseño e-commerce</a></li>
                <li><a href="#">Sección de ofertas semanales</ion-icon></a></li>
                <li><a href="#">Sistema de envios</a></li>
                <li><a href="#">Sistema de facturacion electronica</a></li>
                <li><a href="#">Inicio de sesion con otras plataformas</a></li>
                <li><a href="#">Integración de API para guardar los resgistros</a></li>
                <li><a href="#">Sistema de busqueada avanzado</a></li>
                <li><a href="#">Modo de color(claro o oscuro)</a></li>
                <li><a href="#">Solucion de errores y bugs</a></li>

            </ul>
        </div>
    </div>
    
    <div class="derechos">
        <p> ©2023-2024 Heracles <small>Always Confortable</small> | Todos los derechos</p>
    </div>
</footer>

<script>
    function cambiarCatalogo() {
      // Obtener el id del div que deseas activar en la otra página
      var idDivParaActivar = "miDivEspecial";

      // Redireccionar a la Página 2 con el id como parámetro en la URL
      window.location.href = "Product.php?id=active" + encodeURIComponent(idDivParaActivar);
    }
</script>

</body>
</html>