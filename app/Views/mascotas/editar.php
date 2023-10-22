<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="<?= base_url('index.php/adoptador/update');?>" method="POST">
            <?= csrf_field()?>
                <h2>Editar adoptador</h2>

                <input type="hidden" name="idAdoptador" value="<?=$adoptador->idAdoptador?>">

                <div class="form-group">
                  <label for="foto" class="form-label">Fotografía del adoptador:</label>
                  <img src="<?= $adoptador->foto ?>" class="card-img-top" alt="<?= $adoptador->primerNombre ?>">
                  <input type="text" class="form-control" name="foto" id="foto" value="<?=$adoptador->foto?>"> 
               </div>

                <div class="mab-3">
                    <label for="primerNombre" class="form-label">Primer Nombre:</label>
                    <input type="text" class="form-control" name="primerNombre" id="primerNombre" value="<?=$adoptador->primerNombre?>">
                </div>

                <div class="mab-3">
                    <label for="segundoNombre" class="form-label">Segundo Nombre:</label>
                    <input type="text" class="form-control" name="segundoNombre" id="segundoNombre" value="<?=$adoptador->segundoNombre?>">
                </div>

                <div class="mab-3">
                    <label for="apellidoPaterno" class="form-label">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" value="<?=$adoptador->apellidoPaterno?>">
                </div>

                <div class="mab-3">
                    <label for="apellidoMaterno" class="form-label">Apellido Materno:</label>
                    <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno" value="<?=$adoptador->apellidoMaterno?>">
                </div>

                <div class="mb-3">
                    <lable for="fechaNacimiento" class="form-label">Fecha de nacimiento:</lable>
                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="<?=$adoptador->fechaNacimiento?>">
                </div>

                <div class="mab-3">
                    <label for="CIC" class="form-label">CIC:</label>
                    <input type="number" class="form-control" name="CIC" id="CIC" value="<?=$adoptador->CIC?>">
                </div>

                <div class="mab-3">
                    <label for="CURP" class="form-label">CURP:</label>
                    <input type="text" class="form-control" name="CURP" id="CURP" value="<?=$adoptador->CURP?>">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

            <div class="col-2"></div>

        </div>
    </div>
</div>