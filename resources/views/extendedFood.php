<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YucaFood</title>
    <link rel="stylesheet" href="../CSS/extendedFood.css">

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
    <nav><?php include("../modules/nav.php") ?></nav>
    <main>
        <div class="food"> 
            <div class="foodImageContainer">
                <div class="foodImage"></div>
            </div>
            <div class="foodInfo">
                <h3 class="foodTitle">Panuchos</h3>
                <div class="foodDescription">
                    El panucho yucateco es un antojito típico de la gastronomía de Yucatán, México, famoso por su combinación de sabores frescos y texturas crujientes. Consiste en una tortilla de maíz frita, rellena de frijol negro refrito y cubierto con ingredientes frescos y de colores vibrantes. Algunos de sus elementos principales son:
                    <ul class>
                        <li>Carne de pavo o pollo deshebrado, sazonado con achiote para darle un toque especial.</li>
                        <li>Cebolla morada encurtida, que aporta acidez y color.</li>
                        <li>Rodajas de tomate fresco, que añaden jugosidad.
                        Aguacate en rebanadas, que contribuye una textura suave y cremosa.</li>
                        <li>Chiles habaneros para un toque picante y aromático.</li>
                    </ul>
                    El panucho es conocido por su capa dorada y crujiente, lograda al freír la tortilla rellena, y por la combinación de sabores frescos y un toque de picante. Es un platillo que se disfruta tanto en fiestas y reuniones como en mercados locales y restaurantes tradicionales.</div>
            </div>
        </div>

        <div class="restaurantsTitle">
            <h5>Restaurantes que lo ofrecen:</h5>
            <div class="restaurants">
                <div class="restaurantsMap">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29953.03619274456!2d-89.29698848673675!3d20.211938046908685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRestaurantes!5e0!3m2!1ses-419!2smx!4v1731108813596!5m2!1ses-419!2smx" width="600" height="450" style="border-radius:10px; border: 1px solid rgb(200, 200, 200);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div id="restaurantsLocations" class="locations"></div>
            </div>
        </div>
        
        <div class="relatedFoods">
            <h5>Otros platillos:</h5>
            <?php include("../modules/relatedDishes.php"); ?>
        </div>
    </main>
</body>

<script>
        const container = document.getElementById('restaurantsLocations');

        fetch('../info/restaurants.json')
            .then(response => response.json())
            .then(data => {
                data.restaurants.forEach(restaurant => {
                    const restaurantHTML = `
                        <div class="card mb-0">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">${restaurant.name}</h5>
                                        <p class="card-text"><small class="text-muted">${restaurant.location}</small></p>
                                        <p class="card-text"><span class="text-success">Abierto</span> · Horario: ${restaurant.schedule}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    container.innerHTML += restaurantHTML;
                });
            })
            .catch(error => console.error('Error al cargar el archivo JSON:', error));
    </script>
</html>