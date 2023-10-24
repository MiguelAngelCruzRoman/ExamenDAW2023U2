<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="<?= base_url('index.php/dietas/update');?>" method="POST">
            <?= csrf_field()?>
                <h2>Editar dieta</h2>

                <input type="hidden" name="idDietas" value="<?=$dieta->idDietas?>">

                <div class="mb-3">
                    <lable for="porcionesDiarias" class="form-label">Cantidad de comidas diarias:</lable>
                    <input type="number" class="form-control" name="porcionesDiarias" id="porcionesDiarias" value="<?=$dieta->porcionesDiarias?>">
                </div>

                <div class="mb-3">
                    <lable for="tamañoPorción" class="form-label">Tamaño de las porciones (en gramos):</lable>
                    <input type="number" class="form-control" name="tamañoPorción" id="tamañoPorción" value="<?=$dieta->tamañoPorción?>">
                </div>

                <div class="mb-3">
                    <lable for="carnes" class="form-label">Cantidad de porciones de carne:</lable>
                    <input type="number" class="form-control" name="carnes" id="carnes" value="<?=$dieta->carnes?>">
                </div>

                <div class="mb-3">
                    <lable for="visceras" class="form-label">Cantidad  de porciones de vísceras:</lable>
                    <input type="number" class="form-control" name="visceras" id="visceras" value="<?=$dieta->visceras?>">
                </div>

                <div class="mb-3">
                    <lable for="pescado" class="form-label">Cantidad  de porciones de pescado:</lable>
                    <input type="number" class="form-control" name="pescado" id="pescado" value="<?=$dieta->pescado?>">
                </div>

                <div class="mb-3">
                    <lable for="cereales" class="form-label">Cantidad  de porciones de cereales:</lable>
                    <input type="number" class="form-control" name="cereales" id="cereales" value="<?=$dieta->cereales?>">
                </div>

                <div class="mab-3">
                    <label for="hidratación" class="form-label">Cantidad de agua por día (en litros):</label>
                    <input type="number" class="form-control" name="hidratación" id="hidratación" value="<?=$dieta->hidratación?>">
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