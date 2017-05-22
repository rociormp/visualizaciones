<?php include('cabeza.php');?>
<section>
<h2>Estudiantes</h2>
<?php
$estudiantes = array_map('str_getcsv', file('data/estudiantes.csv'));
array_walk($estudiantes, function(&$a) use ($estudiantes) {$a = array_combine($estudiantes[0], $a);});
array_shift($estudiantes);
$all = count($estudiantes);
?>
<h4>1. Total de estudiantes matriculados en la carrera</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Estudiantes matriculados</th>
  </tr>
<?php for($a=0; $a < $all; $a++){?>
  <tr>
    <td><?php echo$estudiantes[$a]["year"]?></td>
    <td><?php echo$estudiantes[$a]["total_matricula"]?></td>
  </tr>
<?php };?>
</table>

<img src="images/estudiantes.png" width="800px">

<h4>2. Establecimientos educacionales de procedencia de los estudiantes que ingresan al primer año:</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Colegio Particular</th>
    <th>Colegio Particular Subvencionado</th>
    <th>Colegio Municipal</th>
    <th>Ingreso Especial</th>
    <th>Total Ingresos</th>
  </tr>
<?php for($b=0; $b < $all; $b++){?>
  <tr>
    <td><?php echo$estudiantes[$b]["year"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_particular"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_subvencionado"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_municipal"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_especial"]?></td>
    <td><?php echo$estudiantes[$b]["total_ingreso"]?></td>
  </tr>
<?php };?>
</table>
<img src="images/ingreso.png" width="800px">


<h4>3. Edad, género y procedencia regional de los estudiantes que ingresaron a primer año en 2015:</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Menores 18 años</th>
    <th>Entre 18 y 21 años</th>
    <th>Entre 21 y 25 años</th>
    <th>Mayores de 25 años</th>
    <th>Mujeres</th>
    <th>Hombres</th>
    <th>Región Metropolitana</th>
    <th>Otras Regiones</th>
  </tr>
<?php for($c=6; $c < 7; $c++){?>
  <tr>
    <td><?php echo$estudiantes[6]["year"]?></td>
    <td><?php echo$estudiantes[6]["ingreso_total_menores_18"]?></td>
    <td><?php echo$estudiantes[6]["ingreso_total_18_21"]?></td>
    <td><?php echo$estudiantes[6]["ingreso_total_21_25"]?></td>
    <td><?php echo$estudiantes[6]["ingreso_total_mayores_25"]?></td>
    <td><?php echo$estudiantes[6]["ingreso_total_mujeres"]?></td>
    <td><?php echo$estudiantes[6]["ingreso_total_hombres"]?></td>
    <td><?php echo$estudiantes[6]["ingreso_total_metropolitana"]?></td>
    <td><?php echo$estudiantes[6]["ingreso_total_regiones"]?></td>
  </tr>
<?php };?>
</table>
<img src="images/muchosdatos.png" width="800px">


<h4>4. Puntajes de ingreso</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Máximo Ponderados</th>
    <th>Mínimo Ponderados</th>
  </tr>
<?php for($d=0; $d < $all; $d++){?>
  <tr>
    <td><?php echo$estudiantes[$d]["year"]?></td>
    <td><?php echo$estudiantes[$d]["máximo"]?></td>
    <td><?php echo$estudiantes[$d]["mínimo"]?></td>
  </tr>
<?php };?>
</table>

<img src="images/4.puntajes.png" width="800px">
</section>
<?php include('pie.php');?>
