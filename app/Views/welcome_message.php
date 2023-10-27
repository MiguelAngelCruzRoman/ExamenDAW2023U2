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

    <br><br>
    <div class="container">
        <h2>Algunas de las mascotas adoptadas...</h2>
        <div class="row">
            <?php $contadorTarjetas = 0;foreach ($mascotas as $mascota): if ($mascota->status == 1 && $contadorTarjetas < 9):?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="<?= $mascota->foto ?>" class="card-img-top" alt="<?= $mascota->nombre ?>" height="200" width="100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $mascota->nombre ?> (<?= $mascota->edad ?> años)
                        </h5>
                        <?php if ($mascota->status == 1):
                            foreach ($adopciones as $adopcion):
                                if ($adopcion->mascota == $mascota->idMascota):
                                    foreach ($adoptadores as $adoptador):
                                        if ($adopcion->adoptador == $adoptador->idAdoptador):?>
                        <p class="card-text">Adoptado por: <?= $adoptador->primerNombre.' '.$adoptador->segundoNombre.' '.$adoptador->apellidoPaterno.' '.$adoptador->apellidoMaterno ?></p>
                        <?php
                                        endif;
                                    endforeach;
                                endif;
                            endforeach;
                        endif;
                        foreach ($razas as $raza):
                            if ($mascota->raza == $raza->idRaza):?>
                        <p class="card-text">Raza de <?= $raza->tipo.': '. $raza->nombre. ' ('.$raza->origen.')' ?></p>
                        <?php
                            endif;
                        endforeach;
                        ?>
                        <p class="card-text">Personalidad: <?= $mascota->caracter ?></p>
                        <div class="text-center">
                            <a href="<?= base_url('/mascotas/adoptar/' . $mascota->idMascota) ?>" class="btn btn-success">Adoptar</a>
                            <a href="<?= base_url('/mascotas/informacion/' . $mascota->idMascota) ?>" class="btn btn-secondary">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $contadorTarjetas++;
                endif;
            endforeach;
            ?>
        </div>
    </div>

    <br><br>
    <div class="container">
        <h2>Algunas de las mascotas en adopción...</h2>
        <div class="row">
            <?php $contadorTarjetas = 0;foreach ($mascotas as $mascota): if ($mascota->status == 0 && $contadorTarjetas < 9):?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="<?= $mascota->foto ?>" class="card-img-top" alt="<?= $mascota->nombre ?>" height="200" width="100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $mascota->nombre ?> (<?= $mascota->edad ?> años)
                        </h5>
                        <?php if ($mascota->status == 1):
                            foreach ($adopciones as $adopcion):
                                if ($adopcion->mascota == $mascota->idMascota):
                                    foreach ($adoptadores as $adoptador):
                                        if ($adopcion->adoptador == $adoptador->idAdoptador):?>
                        <p class="card-text">Adoptado por: <?= $adoptador->primerNombre.' '.$adoptador->segundoNombre.' '.$adoptador->apellidoPaterno.' '.$adoptador->apellidoMaterno ?></p>
                        <?php
                                        endif;
                                    endforeach;
                                endif;
                            endforeach;
                        endif;
                        foreach ($razas as $raza):
                            if ($mascota->raza == $raza->idRaza):?>
                        <p class="card-text">Raza de <?= $raza->tipo.': '. $raza->nombre. ' ('.$raza->origen.')' ?></p>
                        <?php
                            endif;
                        endforeach;
                        ?>
                        <p class="card-text">Personalidad: <?= $mascota->caracter ?></p>
                        <div class="text-center">
                            <a href="<?= base_url('/mascotas/adoptar/' . $mascota->idMascota) ?>" class="btn btn-success">Adoptar</a>
                            <a href="<?= base_url('/mascotas/informacion/' . $mascota->idMascota) ?>" class="btn btn-secondary">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $contadorTarjetas++;
                endif;
            endforeach;
            ?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
