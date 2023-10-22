<div class="container">
    <div class="row">
<?php
    if(isset($validation)){
        print $validation->listErrors();
    }
?>
        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('index.php/adoptador/agregar');?>" method="POST">
            <?= csrf_field()?>
                <h2>Agregar adoptador</h2>

                <div class="mab-3">
                    <label for="primerNombre" class="form-label">Primer Nombre:</label>
                    <input type="text" class="form-control" name="primerNombre" id="primerNombre" >
                </div>

                <div class="mab-3">
                    <label for="segundoNombre" class="form-label">Segundo Nombre:</label>
                    <input type="text" class="form-control" name="segundoNombre" id="segundoNombre" >
                </div>

                <div class="mab-3">
                    <label for="apellidoPaterno" class="form-label">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" >
                </div>

                <div class="mab-3">
                    <label for="apellidoMaterno" class="form-label">Apellido Materno:</label>
                    <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno" >
                </div>

                <div class="mb-3">
                    <lable for="fechaNacimiento" class="form-label">Fecha de nacimiento:</lable>
                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" >
                </div>

                <div class="mab-3">
                    <label for="CIC" class="form-label">CIC:</label>
                    <input type="number" class="form-control" name="CIC" id="CIC" >
                </div>

                <div class="mab-3">
                    <label for="CURP" class="form-label">CURP:</label>
                    <input type="text" class="form-control" name="CURP" id="CURP" >
                </div>

                <div class="form-group">
                  <label for="foto" class="form-label">Fotografía:</label>
                  <input type="text" class="form-control" name="foto" id="foto"> 
               </div>

               <!-- <div class="form-group">
                  <label for="foto" class="form-label">Fotografía </label>
                  <input type="file" class="form-control" name="foto" id="foto"> 
               </div> -->

               <br>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>


            <div class="col-2"></div>

        </div>
    </div>
</div>