<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="main.css">
<meta http-equiv = "refresh" content = "1">
</head>
<body>
<h1>Température</h1>


<?php
$data = file_get_contents('data.json');
$json = json_decode($data);

$bargraph_heigth = 161 + $json-> temperature * 4;
$bargraph_top = 315 - $json-> temperature * 4;
?>
<p>Il fait <?php echo $json->temperature;?>°C avec <?php echo $json->humidite;?>% d'humidité.</p>

<?php

$filename = 'data.txt';
if (file_exists($filename)) {
    echo "Le  " .date ("d/m/Y \à H:i:s.", filemtime($filename));
}
?>

<div id="thermometer">
  <div id="bargraph" style="height: <?php echo $bargraph_heigth; ?>px; top: <?php echo $bargraph_top; ?>px;"></div>



</div>
</body>
</html>