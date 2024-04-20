<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/Css/InfoProducto.css">  
    <title>Document</title>
</head>
<body>
<?php 

include('ConexionDB.php');


$listCarts = array();
$QueryProducto = "SELECT * from Producto where IdProducto = 1";                    
$resultado = mysqli_query($conn, $QueryProducto);

if (mysqli_num_rows($resultado) > 0) {
    while ($producto = mysqli_fetch_array($resultado)) {
        $container = "
            <div class='product-container'>
                <div class='contenedor-img'>
                    <img src='data:image/png;base64," . base64_encode($producto['Img']) . "' class='img-main'> 
                    <div class='variant-imgContainer'>
                        <img src='data:image/png;base64," . base64_encode($producto['Img']) . "'/>
                        <img src='data:image/png;base64," . base64_encode($producto['Img']) . "'/>
                        <img src='data:image/png;base64," . base64_encode($producto['Img']) . "'/>
                        <img src='data:image/png;base64," . base64_encode($producto['Img']) . "'/>
                    </div>
                </div>
                <div class='content'>
                    <h1 class='title'>{$producto['Nombre']}</h1>
                    <h3 class='category-text'>Categoria: <small>{$producto['Categoria']}</small></h3>
                    <div class='contenedor-text'>
                        <p class='text-product'>{$producto['InfoProducto']}</p>
                    </div>
                    <div class='colors-container'>
                        <span class='color'></span>
                        <span class='color'></span>
                        <span class='color'></span>
                        <span class='color'></span>
                    </div>
                    <div class='quantity-container'>
                        <button class='btnMinus' onclick='changeQuantity({$id}, {$producto['countCart']} - 1)'>-</button>
                        <span class='quantity'>{$producto['countCart']}</span>
                        <button class='btnPlus' onclick='changeQuantity({$id}, {$producto['countCart']} + 1)'>+</button>
                    </div>
                    <span class='price'>Precio: RD$<small>{$producto['Precio']}</small></span>
                    <div class='buttons-container'>    
                        <span href='' class='btnAddCart' onclick='addToCart({$id})'>
                            <span></span>
                            <span></span>                   
                            <span></span>
                            <span></span>
                            Añadir al carrito
                        </span>
                        <a href='pago.html' class='btnBuy'>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Comprar
                        </a>
                    </div>
                </div>
            </div>";
        echo $container;
    }
}

function initApp($producto){
    foreach($producto as $id => $producto){
        
    }
}


function addToCart($id, &$listCarts, $QueryProducto) {
    if (!isset($listCarts[$id])) {
        $listCarts[$id] = $QueryProducto[$id];
        $listCarts[$id]['countCart'] = 1;
    }
    reloadCart($listCarts);
}

function reloadCart($listCarts) {
    $listCart = '';
    $count = 0;
    $totalPrice = 0;

    foreach ($listCarts as $id => $QueryProducto) {
        if ($QueryProducto != null) {
            $totalPrice += floatval($QueryProducto['sell']);
            $count += $QueryProducto['countCart'];

            $newDiv = '<li>';
            $newDiv .= '<div class="img-listContainer"><img src="Img/' . $QueryProducto['imgMain'] . '"/></div>';
            $newDiv .= '<div class="content-list">';
            $newDiv .= '<div>' . $QueryProducto['nameProduct'] . '</div>';
            $newDiv .= '<die>RD$' . number_format($QueryProducto['sell'], 2) . '</die>';
            $newDiv .= '<div class="container-btnList">';
            $newDiv .= '<button onclick="changeQuantity(' . $id . ', ' . ($QueryProducto['countCart'] - 1) . ')">-</button>';
            $newDiv .= '<div class="count">' . $QueryProducto['countCart'] . '</div>';
            $newDiv .= '<button onclick="changeQuantity(' . $id . ', ' . ($QueryProducto['countCart'] + 1) . ')">+</button>';
            $newDiv .= '</div>';
            $newDiv .= '</div>';
            $newDiv .= '</li>';
            $listCart .= $newDiv;
        }
    }
    $total = number_format($totalPrice, 2);
    $countCart = $count;

    echo $listCart;
    echo $total;
    echo $countCart;
}

?>

</body>
</html>