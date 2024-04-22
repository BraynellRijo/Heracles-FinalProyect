<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../assets/Img/LogoPng.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/Css/Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="btnAtras">
            <button class="material-symbols-outlined circle" id="btnBack" onclick="Back()">
                arrow_back
              </button>
    </div>
    <div class="contenedor">
        <div class="signin-signup">

            <!--Sign In Form-->

            <form action="./registro.php" class="sign-in-form" method="post">

                <h2 class="title">Inicia sesión</h2>

                <div class="infield">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nombreusuario" placeholder="Nombre de ususario" > 
                </div>

                <div class="infield">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="contraseña" placeholder="Contraseña"> 
                </div>

                <Input class="btn" type="submit" value="Iniciar sesión" name="Iniciar sesión"></Input>

                <p class="social-text">O iniciar secion con otra plataforma</p>

                <div class="social-media" >
                    <a href="" class="social-icon">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                <!-- <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p> -->
            </form>

            <!-- Sign Up Form-->


            <Form name="./registro.php" method="post" class="sign-up-form" id="#signUp" name="">

                <h2 class="title">Registrarse</h2>

                <div class="infield">
                    <input type="text" placeholder="Nombre" name="nombre"> 
                </div>

                <div class="infield">
                    <input type="text" placeholder="Apellido" name="apellido"> 
                 </div>

                 <div class="infield">
                    <input type="number" placeholder="Edad" name="edad"> 
                 </div>

                 <div class="infield">
                    <input type="text" placeholder="País" name="direccion"> 
                 </div>

                 <div class="infield">
                    <input type="email" placeholder="Email" name="email"> 
                 </div>

                <div class="infield">
                    <input type="password" placeholder="Contraseña"name="contraseña" > 
                </div>

                <Input class="btn" input type="submit" value="Nuevo" name="registrarse">
            
            </Input>
                
                <p class="social-text">O iniciar secion con otra plataforma</p>

                <div class="social-media" >
                    <a href="" class="social-icon">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                <p class="account-text">Already have an account? <a href="#" id="sign-up-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels">
            <div class="panel left-panel">
                <div class="content">
                    <h2>Ya estas regitrado con nosotros?</h2>
                    <p>Inicia sesión para seguir explorando la gran variedad de productos que les brindamos y manterse al dia con nuestras ofertas y nuevos productos</p>
                    <button class="btnChange" id="sign-in-btn">Inicia sesión</button>
                </div>
                <img src="../assets/Img/Register.png" alt="" class="image">
            </div>
            <div class="panel rigth-panel">
                <div class="content">
                    <h2>Nuevo en la marca?</h2>
                    <p>Registrate para pertenecer a nuestra marca y compartir experiencias de comodidad y 
                        calidez, así como obtener beneficios exclusivos que te permitan disfrutar más del tiempo libre.
                    </p>
                    <button class="btnChange" id="sign-up-btn">Registrarse</button>
                </div>
                <img src="../assets/Img/Login.png" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="../assets/Js/App.js"></script>

    <script>
        let btnBack = document.querySelector('#btnBack');
        var Back = function(){
            history.back();
        }
    </script>
    
</body>
</html>