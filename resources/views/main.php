<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YucaFood</title>
    <link rel="stylesheet" href="../CSS/main.css">

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
    <nav>
        <?php include("../modules/nav.php") ?>
    </nav>
    <main id="main_container">
        <article>
            <div class="dishImage" style="background-image: url('../images/foodImages/panuchos.jpg');"></div>
            <div class="dishData">
                <h5 class="dishTitle">Panuchos</h5>
                <p class="description">Los panuchos son antojitos yucatecos que consisten en tortillas de maíz rellenas de frijoles refritos y luego fritas. Se suelen abrir por un extremo y se rellenan con carne, generalmente pavo o cerdo, así como con salsa, aguacate y otros ingredientes al gusto.</p>
                <a href="./extendedFood.php"  class="details"> <p>Ver detalles... <i class="fa-solid fa-chevron-right"></i></p></a>
            </div>
        </article>

        <article>
            <div class="dishImage" style="background-image: url('../images/foodImages/pib.jpg');"></div>
            <div class="dishData">
                <h5 class="dishTitle">Pib</h5>
                <p class="description">Es un tamal grande y redondo o cuadrado hecho con masa de maíz, manteca de cerdo, chile morrón, cebolla, epazote y frijol negro llamado espelón. Además, lleva carne de gallina o puerco y se envuelve en hojas de plátano antes de ser horneado enterrado en un horno de tierra.</p>
                <a href="./extendedFood.php" class="details"> <p>Ver detalles... <i class="fa-solid fa-chevron-right"></i><p></p></a>
            </div>
        </article>

        <article>
            <div class="dishImage" style="background-image: url('../images/foodImages/rellenoNegro.jpeg');"></div>
            <div class="dishData">
                <h5 class="dishTitle">Relleno negro</h5>
                <p class="description">El relleno negro es un platillo elaborado con carne de pavo o cerdo, cocida con chiles secos, especias y chocolate, lo que le confiere un sabor único y oscuro. Se sirve comúnmente durante celebraciones especiales en la región yucateca.</p>
                <a href="./extendedFood.php" class="details"> <p>Ver detalles... <i class="fa-solid fa-chevron-right"></i></p></a>
            </div>
        </article>
        
        <article>
            <div class="dishImage" style="background-image: url('../images/foodImages/cochinitaPibil.jpeg');"></div>
            <div class="dishData">
                <h5 class="dishTitle">Cochinita Pibíl</h5>
                <p class="description">La cochinita pibil es un platillo tradicional de la península de Yucatán, México. Consiste en cerdo marinado con achiote y jugo de naranja agria, envuelto en hojas de plátano y cocido a fuego lento en un horno enterrado. Esto le da un sabor único y jugoso, con notas ahumadas.</p>
                <a href="./extendedFood.php" class="details"> <p> Ver detalles... <i class="fa-solid fa-chevron-right"></i></p></a>
            </div>
        </article>
    </main>
    <footer>
    <?php include("../modules/footer.php") ?>
    </footer>
</body>

</html>