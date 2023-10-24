<div class="container">
    <div class="row">
        <div class="col-12">

        <h1>Buscar Mascotas</h1>

        <form action="<?= base_url('index.php/dietas/buscar/'); ?>" method="GET">
            <label for="porcionesDiarias">Comidas Diarias:</label>
            <input type="number" class="form-control" name="porcionesDiarias" >
            <label for="tamañoPorción">Tamaño de las porciones:</label>
            <input type="number" class="form-control" name="tamañoPorción" >
            <input type="submit" class="btn btn-success mt-4" value="Buscar">
        </form>

        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-12">
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
        </div>
    </div>
</div>

