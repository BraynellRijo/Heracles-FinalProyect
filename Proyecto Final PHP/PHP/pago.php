<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre su pago</title>
    <link rel="shortcut icon" href="../assets/Img/logo.png" width="5px" height="3px">
    <link rel="stylesheet" href="../assets/css/pago.css">
</head>
<body>
    <div class="btnAtras">
        <div class="circle">
            <button class="circle2" id="btnBack" onclick="Back()">
                <!-- <ion-icon name="chevron-back-outline"></ion-icon> -->
            </button>
        </div>
    </div>
    <div class="tarjeta">
        <form action="mailto:rijobraynell@gmail.com" method="post">
            <div id="front" class="active">
            <ul>
                <img src="../assets/Img/chip.png" alt="">
                <!-- <h2>Visa</h2> -->
                <li><div class="campo">
                    <input type="text" placeholder="Banco" id="banco" autocomplete="off" required>
                </div></li>
                <li><div class="campo">
                    <input type="text" placeholder="Numero de la tarjeta" id="numero" autocomplete="off" required>
                </div></li>
                <li><div class="campo">
                    <h6 class="Month-Year">MONTH/YEAR</h6>
                    <input type="text" placeholder="Nombre" id="nombre" autocomplete="off" required>
                </div></li>
                <li><div class="campo">
                    <input type="datetime" placeholder="Fecha de expiración" id="fecha" autocomplete="off" required>
                </div></li>

            </ul>
                <span class="btnNext">Siguiente</span>
            </div>

            <div id="back" class="hide">
            <ul>
                <li>
                    <div class="magnetic-strip"></div>
                </li>                
                <li>
                    <div class="signature"><span>1234</span></div>
                </li>
                <li><div class="campo">
                    <input type="number" placeholder="CVC" id="cvc" autocomplete="off">
                </div></li>
            </ul>
            <span class="btnNext1">Siguiente</span>
        </div>

        <div id="aditional" class="hide">
            <ul>
                <li>
                    <div class="campo-adicional">
                        <input type="text" placeholder="Direccion de facturación" id="direccion-facturacion" required>
                        <span class="linea"></span>
                    </div>
                </li>
                <li>
                    <div class="campo-adicional">
                        <input type="text" placeholder="Codigo postal" id="Codigo-postal" required>
                        <span class="linea"></span>
                    </div>
                </li>
                <li>
                    <div class="campo-adicional">
                        <input type="text" placeholder="Ciudad" id="ciudad" required>
                        <span class="linea"></span>
                    </div>
                </li>
                <li>
                    <div class="campo-adicional">
                        <input type="text" placeholder="Pais" id="pais" required>
                        <span class="linea"></span>
                    </div>
                </li>
                <li>
                    <div class="campo-adicional">
                        <input type="email" placeholder="Correo electronico" id="email-aditional" required>
                        <span class="linea"></span>
                    </div>
                </li>
            </ul>
            <div class="btnFinal">
                <span class="btnBack">Atras</span>
                <button class="btnSend">Enviar</button>
            </div>
        </div>
        </form>
    </div>



    <script>
        let btnBack = document.querySelector('#btnBack');

        var Back = function(){
            history.back();
        }
    </script>
<script>
    const frontContainer = document.getElementById("front")
    const backContainer = document.getElementById("back")
    const aditionalContainer = document.getElementById("aditional")
    const nextBtn = document.querySelector(".btnNext");
    const nextBtn1 = document.querySelector(".btnNext1");
    const backBtn = document.querySelector(".btnBack")
    function hideContainer(){
        if(frontContainer.classList.contains('active')){
            frontContainer.classList.remove('active')
            frontContainer.classList.add('hide')
            backContainer.classList.remove('hide')
            backContainer.classList.add('active')

        }else if(backContainer.classList.contains('active')){
            backContainer.classList.remove('active')
            backContainer.classList.add('hide')
            aditionalContainer.classList.remove('hide')
            aditionalContainer.classList.add('active')
            
        }else{
            aditionalContainer.classList.remove('active')
            aditionalContainer.classList.add('hide')
            frontContainer.classList.add('active')
            frontContainer.classList.remove('hide')
        }
    }
    nextBtn.addEventListener('click', hideContainer)
    nextBtn1.addEventListener('click', hideContainer)
    backBtn.addEventListener('click', hideContainer)
</script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<script src="navAnimation.js"></script>
</html>