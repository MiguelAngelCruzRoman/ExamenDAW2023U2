<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="<?= base_url('index.php/mascotas/update');?>" method="POST">
            <?= csrf_field()?>
                <h2>Editar mascota</h2>

                <input type="hidden" name="idMascota" value="<?=$mascota->idMascota?>">

                <div class="form-group">
                  <label for="foto" class="form-label">Fotografía de la mascota:</label>
                  <img src="<?= $mascota->foto ?>" class="card-img-top" alt="<?= $mascota->nombre ?>">
                  <input type="text" class="form-control" name="foto" id="foto" value="<?=$mascota->foto?>"> 
               </div>

               <div class="mab-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$mascota->nombre?>">
                </div>

                <div class="mb-3">
                    <lable for="edad" class="form-label">Edad:</lable>
                    <input type="number" class="form-control" name="edad" id="edad" value="<?=$mascota->edad?>">
                </div>

                <div class="mb-3">
                    <lable for="idRaza" class="form-label">Raza:</lable>
                    <select name="idRaza" class="form-control" value="<?=$mascota->raza?>">
                        <?php foreach($razas as $raza): ?>
                            <option value="<?= $raza->idRaza?>">Raza de <?=$raza->tipo.': '. $raza->nombre?> (<?= $raza->origen?>)</option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <lable for="idDietas" class="form-label">Dieta:</lable>
                    <select name="idDietas" class="form-control" value="<?=$mascota->dieta?>">
                        <?php foreach($dietas as $dieta): ?>
                            <?php if($dieta->idDietas == $mascota->dieta):?>
                                <option value="<?= $dieta->idDietas?>" selected><?= $dieta->porcionesDiarias?> porciones diarias de <?= ($dieta->carnes)*100?>g de carne, <?= ($dieta->visceras)*100?>g de vísceras, <?= ($dieta->pescado)*100?>g de pescado, <?= ($dieta->cereales)*100?>g de cereales</option>
                            <?php else:?>
                                <option value="<?= $dieta->idDietas?>"><?= $dieta->porcionesDiarias?> porciones diarias de <?= ($dieta->carnes)*100?>g de carne, <?= ($dieta->visceras)*100?>g de vísceras, <?= ($dieta->pescado)*100?>g de pescado, <?= ($dieta->cereales)*100?>g de cereales</option>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <lable for="idCuidados" class="form-label">Cuidado:</lable>
                    <select name="idCuidados" class="form-control" ><!--Falta recuperar el dato de la tabla muchos a muchos mascota_cuidados -->
                        <?php foreach($cuidados as $cuidado): ?>
                            <option value="<?= $cuidado->idCuidados?>"><?= $cuidado->tipo?> <?= $cuidado->cantidadCuidado?> veces (<?= $cuidado->frecuenciaCuidado?>)</option>                       
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mab-3">
                    <label for="caracter" class="form-label">Caracter:</label>
                    <input type="text" class="form-control" name="caracter" id="caracter" value="<?=$mascota->caracter?>">
                </div>
               <br>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

            <div class="col-2"></div>

        </div>
    </div>
</div>