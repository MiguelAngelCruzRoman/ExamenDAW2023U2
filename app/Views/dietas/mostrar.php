<div class="container">
    <h2>Dietas</h2>
    <div class="row">
        <?php foreach ($dietas as $dieta): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            Dieta #<?= $dieta->idDietas?> 
                        </h5>
                        <p class="card-text">Comidas diarias: <?= $dieta->porcionesDiarias ?> (<?= $dieta->tamañoPorción ?> gramos por porción)</p>
                        <p>Ingredientes de la dieta:</p>
                            <ul>
                                <li><p class="card-text">Agua: <?= $dieta->hidratación ?> litros/día</p></li>
                                <li><p class="card-text">Carne: <?= $dieta->carnes?> porciones</p></li>
                                <li><p class="card-text">Vísceras: <?= $dieta->visceras?> porciones</p></li>
                                <li><p class="card-text">Pescado: <?= $dieta->pescado?> porciones</p></li>
                                <li><p class="card-text">Cereales: <?= $dieta->cereales?> porciones</p></li>
                            </ul>
                        <div class="text-center">
                            <a href="<?= base_url('/dietas/delete/' . $dieta->idDietas) ?>" class="btn btn-danger">Eliminar</a>
                            <a href="<?= base_url('/dietas/editar/' . $dieta->idDietas) ?>" class="btn btn-warning">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>