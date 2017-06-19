<?php include('cabeza.php');?>
<section>
<h2>Asignaturas</h2>
<?php
$asignaturas = array_map('str_getcsv', file('url'));
array_walk($asignaturas, function(&$a) use ($asignaturas) {$a = array_combine($asignaturas[0], $a);});
array_shift($asignaturas);
?>
<h4>1. Total de créditos para taller y otras asignaturas por nivel de estudio</h4>
<img src="images/creditos_si.png" width="800px">

<h4>2. Relación de créditos y costos</h4>

<h5>2.1. Los "costos" de las asignaturas en primer año (plan común):</h5>
<img src="images/costo_primero.png" width="800px">

<h5>2.2. Los "costos" de las asignaturas en mención de diseño gráfico:</h5>
<img src="images/graficos.png" width="800px">

<h5>2.3. Los "costos" de las asignaturas en mención de diseño industrial:</h5>
<img src="images/industrial.png" width="800px">
  
<h4>3. Propongan una visualización</h4>
<a src="images/propuesta.png"><img src="images/propuesta.png" width="800px"></a>
</section>
<?php include('pie.php');?>
