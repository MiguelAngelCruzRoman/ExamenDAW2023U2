<div class="container">
    <div class="row">
<?php
    if(isset($validation)){
        print $validation->listErrors();
    }
?>
        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('index.php/razas/agregar');?>" method="POST">
            <?= csrf_field()?>
                <h2>Agregar raza</h2>

                <div class="mab-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                </div>

                <div class="mb-3">
                    <lable for="origen" class="form-label">Origen:</lable>
                    <input type="text" class="form-control" name="origen" id="origen" >
                </div>

                <div class="mb-3">
                    <lable for="esperanzaVida" class="form-label">Esperanza de vida:</lable>
                    <input type="number" class="form-control" name="esperanzaVida" id="esperanzaVida" >
                </div>

                <div class="mab-3">
                    <label for="largo" class="form-label">Tamaño de largo(cm):</label>
                    <input type="text" class="form-control" name="largo" id="largo" >
                </div>

                <div class="mab-3">
                    <label for="alto" class="form-label">Tamaño de alto(cm):</label>
                    <input type="text" class="form-control" name="alto" id="alto" >
                </div>

                <div class="form-group">
                  <label for="color" class="form-label">Color del pelaje: </label>
                  <input type="text" class="form-control" name="color" id="color"> 
                </div>

                <div class="mb-3">
                    <lable for="tamañoPelaje" class="form-label">Tamaño del pelaje:</lable>
                    <select name="tamañoPelaje" class="form-control">
                        <option value="Largo">Largo (más de 4 cm) </option>
                        <option value="Corto">Corto (menos de 1 cm)</option>
                        <option value="Mediano">Mediano (de 1 a 4 cm)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <lable for="tipoPelaje" class="form-label">Tipo del pelaje:</lable>
                    <select name="tipoPelaje" class="form-control">
                        <option value="Liso">Liso</option>
                        <option value="Rizado">Rizado</option>
                        <option value="Doble">Doble</option>
                        <option value="Arrugado">Arrugado</option>
                    </select>
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