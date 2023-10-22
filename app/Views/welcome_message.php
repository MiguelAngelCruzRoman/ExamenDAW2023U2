<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Centro de Adopción de Mascotas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="mt-5">Bienvenido al Centro de Adopción de Mascotas</h1>
                <p>Somos un lugar dedicado a ayudar a las mascotas a encontrar un hogar amoroso.</p>
                <p>Aquí puedes encontrar información sobre nuestras instalaciones y cómo adoptar una mascota.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Por qué adoptar una mascota</h2>
                <p>La adopción de una mascota es una decisión maravillosa. Te brinda la oportunidad de darle un hogar a un amigo peludo que lo necesita y recibir amor incondicional a cambio. Adoptar una mascota también ayuda a reducir la sobrepoblación de refugios y salva vidas. ¡No dudes en dar el paso y adoptar a tu nuevo compañero!</p>
            </div>
            <div class="col-md-6">
                <h2>Nuestros Servicios</h2>
                <ul>
                    <li>Adopción de Mascotas</li>
                    <li>Cuidado de Mascotas</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Mascotas Adoptadas</h2>
                <div id="adoptedCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#adoptedCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#adoptedCarousel" data-slide-to="1"></li>
                        <li data-target="#adoptedCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="adopted_pet_1.jpg" class="d-block w-100" alt="Mascota 1">
                        </div>
                        <div class="carousel-item">
                            <img src="adopted_pet_2.jpg" class="d-block w-100" alt="Mascota 2">
                        </div>
                        <div class="carousel-item">
                            <img src="adopted_pet_3.jpg" class="d-block w-100" alt="Mascota 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#adoptedCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#adoptedCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Mascotas en Adopción</h2>
                <div id="availableCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#availableCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#availableCarousel" data-slide-to="1"></li>
                        <li data-target="#availableCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="available_pet_1.jpg" class="d-block w-100" alt="Mascota 1">
                        </div>
                        <div class="carousel-item">
                            <img src="available_pet_2.jpg" class="d-block w-100" alt="Mascota 2">
                        </div>
                        <div class="carousel-item">
                            <img src="available_pet_3.jpg" class="d-block w-100" alt="Mascota 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#availableCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#availableCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
