<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title> 
    <link rel="shortcut icon" href="../assets/Img/LogoPng.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/Css/Product.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <!--Script iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://kit.fontawesome.com/ea8db2e383.js" crossorigin="anonymous"></script>

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
<div class="container-cart"></div>
    <div class="addCart">
        <!-- <h1>Tu carrito de compras</h1> -->
        <div class="cart-Icon">
            <i class="fa-solid fa-cart-plus"></i>
            <span class="count">0</span>
        </div>
    </div>
</header>
<div class="cart">
    <h1>Carrito</h1>
    <ul class="list-cart">

    </ul>
        <div class="verificar">
            <div class="total">0.00</div>
            <div class="cerrar">Cerrar</div>
        </div>
    </div>

<main>
<?php
include('ConexionDB.php');

// Función para filtrar productos por categoría
function filterProductsByCategory($category) {
    global $conn;
    $productQuery = "SELECT * FROM producto";
    if ($category != 'Todos') {
        $productQuery .= " WHERE Categoria = '$category'";
    }
    $resultProducts = mysqli_query($conn, $productQuery);
    return $resultProducts;
}

// Función para buscar productos por nombre
function searchProducts($searchTerm) {
    global $conn;
    $searchQuery = "SELECT * FROM producto WHERE Nombre LIKE '%$searchTerm%'";
    $resultProducts = mysqli_query($conn, $searchQuery);
    return $resultProducts;
}

// Manejar la categoría seleccionada
$selectedCategory = isset($_POST['button-value']) ? $_POST['button-value'] : 'Todos';
$resultProducts = filterProductsByCategory($selectedCategory);

// Manejar la búsqueda
$searchTerm = isset($_POST['search-input']) ? $_POST['search-input'] : '';
if (!empty($searchTerm)) {
    $resultProducts = searchProducts($searchTerm);
}
?>

<form action="" method="post">
    <div class="contenedor-main">
        <div id="busqueda-contenedor">
            <input type="search" placeholder="Buscar..." id="search-input" name="search-input" value="<?php echo $searchTerm; ?>">
            <button id="search" type="submit">Buscar</button>
        </div>
        <div id="btnCategory">
            <button class="button-value <?php echo ($selectedCategory == 'Todos') ? 'active' : ''; ?>" name="button-value" id="Todos" value="Todos">Todos</button>
            <button class="button-value <?php echo ($selectedCategory == 'T-Shirt') ? 'active' : ''; ?>" name="button-value" id="T-Shirt" value="T-Shirt">T-Shirt</button>
            <button class="button-value <?php echo ($selectedCategory == 'Top') ? 'active' : ''; ?>" name="button-value" id="Top" value="Top">Top</button>
            <button class="button-value <?php echo ($selectedCategory == 'Sudaderas') ? 'active' : ''; ?>" name="button-value" id="Sudaderas" value="Sudaderas">Sudaderas</button>
            <button class="button-value <?php echo ($selectedCategory == 'Leggins') ? 'active' : ''; ?>" name="button-value" id="Leggins" value="Leggins">Leggins</button>
            <button class="button-value <?php echo ($selectedCategory == 'Joggers') ? 'active' : ''; ?>" name="button-value" id="Joggers" value="Joggers">Joggers</button>
            <button class="button-value <?php echo ($selectedCategory == 'Shorts') ? 'active' : ''; ?>" name="button-value" id="Shorts" value="Shorts">Shorts</button>
            <button class="button-value <?php echo ($selectedCategory == 'Tenis') ? 'active' : ''; ?>" name="button-value" id="Tenis" value="Tenis">Tenis</button>
            <button class="button-value <?php echo ($selectedCategory == 'Gorras') ? 'active' : ''; ?>" name="button-value" id="Gorras" value="Gorras">Gorras</button>
            <button class="button-value <?php echo ($selectedCategory == 'Accesorios') ? 'active' : ''; ?>" name="button-value" id="Accesorios" value="Accesorios">Accesorios</button>
            <button class="button-value <?php echo ($selectedCategory == 'Equipamiento') ? 'active' : ''; ?>" name="button-value" id="Equipamiento" value="Equipamiento">Equipamiento</button>
        </div>
        <div id="products">
            <?php
            if ($resultProducts->num_rows > 0) {
                while ($producto = $resultProducts->fetch_assoc()) {
                    echo "<div class='card {$producto['Categoria']}'>"; // Div para la imagen de la carta
                    echo "<div class='image-container'>";
                    echo '<img src="data:image/png;base64,' . base64_encode($producto['Img']) . '"/>';
                    echo "</div>"; // Fin de image-container
                    // Contenedor
                    echo "<div class='container'>";
                    // Texto de la carta
                    echo "<h3 class='product-name'>" . strtoupper($producto['Nombre']) . "</h3>";
                    // Precio
                    echo "<h5>RD$ " . $producto['Precio'] . ".99</h5>";
                    // Contenedor de botones
                    echo "<div class='button-container'>";
                    // Botón de comprar
                    echo "<a href='InfoProducto.php#'><span>Ver</span></a>";
                    // Botón de añadir al carrito
                    echo "<button class='btnAddCart'><span>Añadir al carrito</span></button>";
                    echo "</div>"; // Fin de button-container
                    echo "</div>"; // Fin de container
                    echo "</div>";
                }
            } else {
                echo "<p>No se encontraron productos.</p>";
            }
            ?>
        </div>
    </div>
</form>
</main>


<footer>
    <div class="enlaces-footer">
    <div class="container-footer">
        
            <h2 class="title-footer">Contactenos</h2>
            <ul>
                <li><a href="https://instagram.com/hera.cle.s?igshid=MzRlODBiNWFlZA==">Instagram<ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="https://www.tiktok.com/@he.racles?_t=8eLa6lXEYDO&_r=1">Tik Tok<ion-icon name="logo-tiktok"></ion-icon></a></li>
            </ul>
        </div>
        <hr class="divide-line">
        <div class="container-footer">
            <h2 class="title-footer">Explora</h2>
            <ul>
                <li><a href="Index.php">Inicio</a></li>
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
                <li><a href="#">Modo de temas(claro o oscuro)</a></li>
                <li><a href="#">Solucion de errores y bugs</a></li>

            </ul>
        </div>
    </div>
    
    <div class="derechos">
        <p> ©2023-2024 Heracles <small>Always Confortable</small> | Todos los derechos</p>
    </div>
</footer>


<script src="../assets/Js/ScripProduct.js"></script>
<script>
    // Obtener el valor del parámetro de la URL
    var params = new URLSearchParams(window.location.search);
    var valorParaDiv = params.get('active');

    // Verificar si el valor existe y activar el div
    if (valorParaDiv) {
      var divActivado = document.getElementById('divParaActivar');
      divActivado.innerText = valorParaDiv;
    }
  </script>
  
</body>
</html>