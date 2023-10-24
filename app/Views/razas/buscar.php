<div class="container">
    <div class="row">
        <div class="col-12">

        <h1>Buscar Razas</h1>

        <form action="<?= base_url('index.php/razas/buscar/'); ?>" method="GET">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" >
            <label for="origen">Origen:</label>
            <input type="text" class="form-control" name="origen" >
            <label for="tamaño">Tamaño(cm):</label>
            <input type="number" class="form-control" name="tamaño" >
            <input type="submit" class="btn btn-success mt-4" value="Buscar">
        </form>

        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-12">
            <div class="container">
                <h2>Razas</h2>
                <div class="row">
                    <?php foreach ($razas as $raza): ?>
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $raza->nombre ?> (<?= $raza->origen ?>)
                                    </h5>
                                    <p class="card-text">Esperanza de vida: <?= $raza->esperanzaVida ?> años</p>
                                    <p class="card-text">Tamaño: <?= $raza->largo?> cm de largo, <?= $raza->alto ?> cm de alto</p>
                                    <p class="card-text">Pelaje: pelo <?= $raza->tamañoPelaje?> <?= $raza->tipoPelaje?> de color <?= $raza->color?></p>
                                    <div class="text-center">
                                        <a href="<?= base_url('/razas/delete/' . $raza->idRaza) ?>" class="btn btn-danger">Eliminar</a>
                                        <a href="<?= base_url('/razas/editar/' . $raza->idRaza) ?>" class="btn btn-warning">Editar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

