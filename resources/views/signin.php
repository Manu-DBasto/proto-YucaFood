<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../CSS/sign_login.css">

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
    <main>
        <figure>
            <img src="../images/logo.png" alt="">
        </figure>

        
        <div class="main_container">
            <h3 class="titulo">Registro</h3>
            <form action="../../login.php">
                <div class="separator">
                    <div class="cont_input">
                        <input type="text" placeholder="Nombre" class="campo" >
                    </div>
        
                    <div class="cont_input">
                        <input type="email" placeholder="Correo electronico" class="campo" ><!--EMAIL del atributo type define que se espera un correo electrónico-->
                    </div>
        
                    <div class="cont_input">
                        <input type="tel" placeholder="Numero telefónico" class="campo" ><!--TEL del atributo type define que se espera un numero telefonico-->
                    </div>
        
                    <div class="cont_input">
                        <input type="password" placeholder="Contraseña" class="campo" >
                    </div>
        
                    <div class="cont_input">
                        <input type="password" placeholder="Confirmar contraseña" class="campo" >
                    </div>
    
                    <div class="cont_input">
                        <input type="text" placeholder="Pregunta secreta" class="campo" >
                    </div>
                </div>
                <input type="submit" class="btn btn-danger" name="" id="" value="Registrarse">
            </form>

            <div>
                </p>No tiene cuenta? <a href="../../login.php">Inicie sesion</a></p>
            </div>
        </div>
        
        
    </main>
</body>
</html>