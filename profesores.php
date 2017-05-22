<?php include('cabeza.php');?>
<section>
<h2>Profesores</h2>
<?php
$profesores = array_map('str_getcsv', file('Data/profesores.csv'));
array_walk($profesores, function(&$a) use ($profesores) {$a = array_combine($profesores[0], $a);});
array_shift($profesores);
$all = count($profesores);
?>

<h4>1. Total de profesores que aportan a la carrera de diseño, y sus categorías académicas</h4>
<table class="table table-condensed">
  <tr>
    <th>Profesor</th>
    <th>Categoría académica</th>
  </tr>
<?php for($a=0; $a < $all; $a++){?>
  <tr>
    <td><?php echo $profesores[$a]["Nombres"]." ".$profesores[$a]["Apellidos"]?></td>
    <td><?php echo$profesores[$a]["Categoría"]?></td>
  </tr>
<?php };?>
</table>

<img src="images/1profes_categoria.png" width="800px">

<h4>2. Académicos en carrera ordinaria, rangos y horas de trabajo</h4>

<table class="table table-condensed">
  <tr>
    <th>Profesor</th>
    <th>Rango</th>
    <th>Horas de trabajo</th>
  </tr>
<?php $cuantos_ordinarios=0;?>
<?php for($b=0; $b < $all; $b++){?>
  <?php if (substr_count($profesores[$b]["Categoría"],'Ordinaria') > 0) {?>
  <tr>
    <td><?php echo $profesores[$b]["Nombres"]." ".$profesores[$b]["Apellidos"]?></td>
    <td><?php echo$profesores[$b]["Rango"]?></td>
    <td><?php echo$profesores[$b]["Horas"]?></td>
    <?php $cuantos_ordinarios++;?>
  </tr>
  <?php };?>
<?php };?>
</table>
<h3>Son <?php echo($cuantos_ordinarios);?> Académicos en carrera ordinaria.</h3>

<img src="images/2profes_ordinarios_chico.png" width="800px">

<h4>3. Académicos en carrera docente, rangos y horas de trabajo</h4>

<table class="table table-condensed">
  <tr>
    <th>Profesor</th>
    <th>Rango</th>
    <th>Horas de trabajo</th>
  </tr>
<?php $cuantos_docentes=0;?>
<?php for($c=0; $c < $all; $c++){?>
  <?php if (substr_count($profesores[$c]["Categoría"],'Docente') > 0) {?>
  <tr>
    <td><?php echo $profesores[$c]["Nombres"]." ".$profesores[$c]["Apellidos"]?></td>
    <td><?php echo $profesores[$c]["Rango"]?></td>
    <td><?php echo $profesores[$c]["Horas"]?></td>
    <?php $cuantos_docentes++;?>
  </tr>
  <?php };?>
<?php };?>
</table>

<img src="images/3profes_docentes_chico.png" width="800px">
<h4>4. Grados académicos</h4>

  <table class="table table-condensed">
    <tr>
      <th>Profesor</th>
      <th>Rango</th>
      <th>Horas de trabajo</th>
    </tr>
  <?php
  $cuantos_profesores=0;
  $cuantos_doctores=0;
  $cuantos_magister=0;
  $cuantos_licenciados=0;
  ?>
  <?php for($d=0; $d < $all; $d++){?>
    <?php if (substr_count($profesores[$d]["Rango"],'Profesor') > 0) {?>
    <tr>
      <td><?php echo $profesores[$d]["Nombres"]." ".$profesores[$d]["Apellidos"]?></td>
      <td><?php echo $profesores[$d]["Rango"]?></td>
      <td><?php echo $profesores[$d]["Grado Académico"]?></td>
      <?php if (($profesores[$d]["Grado Académico"])=="Doctor"){?><?php $cuantos_doctores++;?><?php };?>
      <?php if (($profesores[$d]["Grado Académico"])=="Magíster"){?><?php $cuantos_magister++;?><?php };?>
      <?php if (($profesores[$d]["Grado Académico"])=="Licenciado"){?><?php $cuantos_licenciados++;?><?php };?>
      <?php $cuantos_profesores++;?>
    </tr>
    <?php };?>
  <?php };?>
  </table>
<img src="images/3profes_grado.png" width="800px">

</section>
<?php include('pie.php');?>
