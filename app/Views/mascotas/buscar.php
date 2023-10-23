<div class="container">
    <div class="row">
        <div class="col-12">

        <h1>Buscar Mascotas</h1>

        <form action="<?= base_url('index.php/mascotas/buscar/'); ?>" method="GET">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" >
            <lable for="idRaza" class="form-label">Raza:</lable>
                <select name="idRaza" class="form-control">
                    <?php foreach($razas as $raza): ?>
                        <option value="<?= $raza->idRaza?>"> <?= $raza->nombre?> (<?= $raza->origen?>)</option>
                    <?php endforeach; ?>
                </select>

            <input type="submit" class="btn btn-success mt-4" value="Buscar">
        </form>

        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-12">
            <div class="container">
                <h2>Mascotas</h2>
                <div class="row">
                    <?php foreach ($mascotas as $mascota): ?>
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img src="<?= $mascota->foto ?>" class="card-img-top" alt="<?= $mascota->nombre ?>">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $mascota->nombre ?> (<?= $mascota->edad ?> años)
                                    </h5>
                                    <?php foreach ($razas as $raza): ?>
                                        <?php if ($mascota->raza == $raza->idRaza): ?>
                                        <p class="card-text">Raza: <?= $raza->nombre ?> ( <?= $raza->origen ?>)</p>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                    <p class="card-text">Personalidad: <?= $mascota->caracter ?></p>
                                    <div class="text-center">
                                        <a href="<?= base_url('/mascotas/delete/' . $mascota->idMascota) ?>" class="btn btn-danger">Eliminar</a>
                                        <a href="<?= base_url('/mascotas/editar/' . $mascota->idMascota) ?>" class="btn btn-warning">Editar</a>
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

