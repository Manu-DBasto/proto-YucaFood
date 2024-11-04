<!DOCTYPE html> <!--DEFINE QUE EL ARCHIVO SERA HTML5-->
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--EL VALOR VIEWPORT CONTROLAR LA PRESENTACION EN DISPOSITIVOS MOVILES-->
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="./resources/CSS/sign_login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main> <!---DEFINE EL CUERPO PRINCIPAL DEL DOCUMENTO-->
        <figure> <!--DEFINE LA INSERCION DE ALGUN CONTENIDO MULTIMEDIA-->
            <img class="logo" src="./resources/images/logo.png" alt="">
        </figure>

        <div class="main_container">
            <p class="title">Iniciar sesión</p>
        
            <form action="./resources/views/main.php">
                <div class="separator">
                    <div class="cont_input">
                        <input type="text" placeholder="Nombre" class="campo" > <!--REQUIRED define que es necesario llenar el campo-->
                    </div>
                
                    <div class="cont_input">
                        <input type="password" placeholder="Contraseña" class="campo" ><!--PLACEHOLDER, define que su valor sera un texto provisional-->
                    </div>
                </div>
            
                <input type="submit" name="" class="btn btn-danger subButton" id="" value="Iniciar sesión">
            </form>

            <div>
                </p>No tiene cuenta? <a href="./resources/views/signin.php">Registrese</a></p>
            </div>
        </div>
    </main>
</body>
</html>