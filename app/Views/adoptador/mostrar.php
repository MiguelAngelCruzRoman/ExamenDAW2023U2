<div class="container">
    <h2>Adoptadores</h2>
    <div class="row">
        <?php foreach ($adoptadores as $adoptador): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="<?= $adoptador->foto ?>" class="card-img-top" alt="<?= $adoptador->primerNombre ?>" height="200" width="100"> 
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $adoptador->primerNombre ?> <?= $adoptador->segundoNombre ?> <?= $adoptador->apellidoPaterno ?> <?= $adoptador->apellidoMaterno ?>
                        </h5>
                        <p class="card-text">Fecha de Nacimiento: <?= $adoptador->fechaNacimiento ?></p>
                        <p class="card-text"><?php if($adoptador->status == 0)echo 'Activo desde: '.$adoptador->created_at;else echo'Aún no está activo'; ?></p>
                        <p class="card-text">Mascota(s) adoptada(s):
                            <ul class="list-unstyled">
                            <?php foreach($MAS as $MA):?>
                                <?php if($MA['idA'] == $adoptador->idAdoptador):?>
                                        <li><p class="card-text"><?= $MA['nombreM'].'('.$MA['nr'].' de '.$MA['or'] .') desde '.$MA['fechaAdopcion']?></p></li>                             
                                <?php endif;?>
                            <?php endforeach;?>
                            </ul>
                        </p>
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