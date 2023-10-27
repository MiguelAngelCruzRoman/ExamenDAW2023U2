<div style="width: 50%; margin: 0 auto;" class="col-md-6 offset-md-3">
        <h1 class="mt-5 text-center">Estadísticas</h1><br>

        <h2 class="mt-5">Gráfica de mascotas</h2>
        <canvas id="GraficaMascotas"></canvas><br>
        
        <h2 class="mt-5">Gráfica de tipos de mascotas</h2>
        <canvas id="GraficaTiposMascotas"></canvas><br>

        <h2 class="mt-5">Gráfica de usuarios</h2>
        <canvas id="GraficaAdoptadores"></canvas>
    </div>

    <script>
        <?php $total=0;$adoptadas=0;$sinAdoptar=0;foreach ($mascotas as $mascota) {
            if($mascota->status == 1){
                $adoptadas = $adoptadas + 1;
            }else{
                $sinAdoptar = $sinAdoptar +1;
            }
            $total = $total + 1;
        }?>
        var ctx = document.getElementById('GraficaMascotas').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', 
            data: {
                labels: ["Adoptadas", "Sin adoptar", "Total"],
                datasets: [{
                    label: 'Mascotas',
                    data: [<?=$adoptadas.','.$sinAdoptar.','.$total?>], 
                    backgroundColor: 'rgba(119, 163, 69, 1)',
                    borderColor: 'rgba(255,255,255, 1)', 
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<script>
        <?php $total=0;$perro=0;$gatos=0;foreach ($mascotas as $mascota) {
            foreach($razas as $raza){
                if(($mascota->raza == $raza->idRaza) && ($raza->tipo == 'Perro')){
                    $perro = $perro + 1;
                }

                if(($mascota->raza == $raza->idRaza) && ($raza->tipo == 'Gato')){
                    $gatos = $gatos +1;
                }
            }
            $total = $total + 1;
        }?>
        var ctx = document.getElementById('GraficaTiposMascotas').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', 
            data: {
                labels: ["Perros", "Gatos", "Total"],
                datasets: [{
                    label: 'Mascotas',
                    data: [<?=$perro.','.$gatos.','.$total?>], 
                    backgroundColor: 'rgba(119, 163, 69, 1)',
                    borderColor: 'rgba(255,255,255, 1)', 
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<script>
        <?php $total=0;$adopta=0;$noAdopta=0;foreach ($adoptadores as $adoptador) {
            if($adoptador->status == 1){
                $adopta = $adopta + 1;
            }else{
                $noAdopta = $noAdopta +1;
            }
            $total = $total + 1;
        }?>
        var ctx = document.getElementById('GraficaAdoptadores').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', 
            data: {
                labels: ["Han adoptado", "No han adoptado", "Total"],
                datasets: [{
                    label: 'Usuarios',
                    data: [<?=$adopta.','.$noAdopta.','.$total?>], 
                    backgroundColor: 'rgba(119, 163, 69, 1)',
                    borderColor: 'rgba(255,255,255, 1)', 
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>