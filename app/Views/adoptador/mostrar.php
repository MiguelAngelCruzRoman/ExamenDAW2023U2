<div class="container">
    <h2>Adoptadores</h2>
    <div class="row">
        <?php foreach ($adoptadores as $adoptador): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="<?= $adoptador->foto ?>" class="card-img-top" alt="<?= $adoptador->primerNombre ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $adoptador->primerNombre ?> <?= $adoptador->segundoNombre ?> <?= $adoptador->apellidoPaterno ?> <?= $adoptador->apellidoMaterno ?>
                        </h5>
                        <p class="card-text">Fecha de Nacimiento: <?= $adoptador->fechaNacimiento ?></p>
                        <p class="card-text">Status: <?= $adoptador->status ?></p>
                        <div class="text-center">
                            <a href="<?= base_url('/adoptador/delete/' . $adoptador->idAdoptador) ?>" class="btn btn-danger">Eliminar</a>
                            <a href="<?= base_url('/adoptador/editar/' . $adoptador->idAdoptador) ?>" class="btn btn-warning">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>