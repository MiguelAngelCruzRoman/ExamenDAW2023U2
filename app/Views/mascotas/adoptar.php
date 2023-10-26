<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="<?= base_url('index.php/mascotas/updateAdopcion');?>" method="POST">
            <?= csrf_field()?>
                <h2>Adoptar mascota</h2>

                <input type="hidden" name="idMascota" value="<?=$mascota->idMascota?>">

                <div class="card">
                <h2 class="card-title text-center">¡Conoce a <?=$mascota->nombre?>!</h2>

                <img src="<?= $mascota->foto ?>" class="card-img-top" alt="<?= $mascota->nombre ?>">
                <div class="card-body text-center">
                    <h4 class="card-text">Edad: <?=$mascota->edad?> años</h4>
                    
                    <h4 class="card-text">Raza:  
                        <?php foreach($razas as $raza): ?>
                            <?php if($raza->idRaza == $mascota->raza): ?> 
                            <?= $raza->nombre?> (<?= $raza->origen?>)
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </h4>
                    
                    <?php foreach($dietas as $dieta): ?>
                        <?php if($dieta->idDietas == $mascota->dieta): ?> 
                        <h4 class="card-text">Comidas diarias: <?= $dieta->porcionesDiarias ?> (<?= $dieta->tamañoPorción ?> gramos por porción)</h4>
                        <h4 class="card-text">Ingredientes de la dieta:</h4>
                        <ul class="list-unstyled">
                            <li>Agua: <?= $dieta->hidratación ?> litros/día</li>
                            <li>Carne: <?= $dieta->carnes?> porciones</li>
                            <li>Vísceras: <?= $dieta->visceras?> porciones</li>
                            <li>Pescado: <?= $dieta->pescado?> porciones</li>
                            <li>Cereales: <?= $dieta->cereales?> porciones</li>
                        </ul>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <h4 class="card-text">Cuidados especiales:</h4>
                    <ul class="list-unstyled"> 
                        <?php $varControl = 0;foreach($mascotaCuidados as $mascotaCuidado): ?>
                            <?php if($mascotaCuidado->mascota == $mascota->idMascota): ?> 
                                <?php foreach($cuidados as $cuidado): ?>
                                    <?php if($mascotaCuidado->cuidado == $cuidado->idCuidados): ?> 
                                        <li> <?= $cuidado->tipo.' '.$cuidado->cantidadCuidado?> veces (<?= $cuidado->frecuenciaCuidado?>)</li>                             
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php $varControl = 1;endif; ?>
                        <?php endforeach; ?>
                        <?php if($varControl == 0):?> 
                            <li>Ninguno</li>                             
                            <?php $varControl = 1;?>
                        <?php endif; ?>
                    </ul>
                    
                    <h4 class="card-text">Carácter: <?=$mascota->caracter?></h4>
                </div>
            </div>

            <div class="mb-3">
                    <lable for="idAdoptador" class="form-label">Adoptador:</lable>
                    <select name="idAdoptador" class="form-control">
                        <?php foreach($adoptadores as $adoptador): ?>
                            <option value="<?= $adoptador->idAdoptador?>"><?= $adoptador->primerNombre.' '.$adoptador->segundoNombre.' '.$adoptador->apellidoPaterno.' '.$adoptador->apellidoMaterno.' ('.$adoptador->CURP.')'?></option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

            <div class="col-2"></div>

        </div>
    </div>
</div>