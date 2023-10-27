<div class="container">
    <div class="row">
        <div class="col-12">

        <h1>Buscar Mascotas</h1>

        <form action="<?= base_url('index.php/mascotas/buscarUsuario/'); ?>" method="GET">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" >
            <lable for="idRaza" class="form-label">Raza:</lable>
                <select name="idRaza" class="form-control">
                    <option value="" select>Cualquier tipo</option>
                    <?php foreach($razas as $raza): ?>
                        <option value="<?= $raza->idRaza?>"><?=$raza->tipo.': '.$raza->nombre?> (<?= $raza->origen?>)</option>
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
                                <img src="<?= $mascota->foto ?>" class="card-img-top" alt="<?= $mascota->nombre ?>" height="200" width="100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $mascota->nombre ?> (<?= $mascota->edad ?> años)
                                    </h5>
                                    <?php foreach ($razas as $raza): ?>
                                        <?php if ($mascota->raza == $raza->idRaza): ?>
                                        <p class="card-text">Raza de <?=$raza->tipo.': '.$raza->nombre ?> ( <?= $raza->origen ?>)</p>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                    <?php foreach ($adopciones as $adopcion): ?>
                                        <?php if ($adopcion->mascota == $mascota->idMascota): ?>
                                            <?php foreach ($adoptadores as $adoptador ): ?>
                                                <?php if ($adopcion->adoptador == $adoptador->idAdoptador): ?>
                                                    <p class="card-text">Adoptado por: <?= $adoptador->primerNombre.' '.$adoptador->segundoNombre.' '.$adoptador->apellidoPaterno.' '.$adoptador->apellidoMaterno?></p>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                    <p class="card-text">Personalidad: <?= $mascota->caracter ?></p>
                                    <div class="text-center">
                                        <a href="<?= base_url('/mascotas/delete/' . $mascota->idMascota) ?>" class="btn btn-danger">Eliminar</a>
                                        <a href="<?= base_url('/mascotas/editar/' . $mascota->idMascota) ?>" class="btn btn-warning">Editar</a>
                                        <?php if($mascota->status == false):?><a href="<?= base_url('/mascotas/adoptar/' . $mascota->idMascota) ?>" class="btn btn-success">Adoptar</a><?php endif;?>
                                        <a href="<?= base_url('/mascotas/informacion/' . $mascota->idMascota) ?>" class="btn btn-secondary">Saber más</a>
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

