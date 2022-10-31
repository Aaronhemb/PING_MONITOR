<?php
$iplist2 = array
(
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
array ("ip","nombre asigando"),

);

$i = count ($iplist2);
$resultados2 = [];

for($j=0;$j<$i;$j++) {
    $ip = $iplist2[$j][0];
    $ping = exec("ping -n 1 -w 5 $ip",$output,$status);
    $resultados2[] = $status;
}



?>

<!--- Inicio de la segunda grafica  ------------>

<br><br>
<!--Dimenciones del div para que la grafica se vea mas pequeña y en posicion-->
<div class="graficacolores3" style="
display: flex !important;
width: 538px !important;
height: 577px !important;
margin-top: -270px !important;
">

<br><br><br>
<!--Dimenciones del canvas para que la grafica se vea mas pequeña y en posicion-->
<canvas id="myChart2" style="
display: flex;
 width: 1302px;
height: 754px !important;

}
"></canvas>
<script>

const etiquetas2 = <?php echo json_encode($iplist2) ?>;
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
	 type: 'bar',
	 data: {
			 labels: etiquetas2,
			 datasets: [{
					 label: 'Ping que no llegan',
					 data: <?php echo json_encode($resultados2) ?>,
					 backgroundColor: [
							 'rgba(255, 99, 132, 0.2)',
							 'rgba(54, 162, 235, 0.2)',
							 'rgba(255, 206, 86, 0.2)',
							 'rgba(75, 192, 192, 0.2)',
							 'rgba(153, 102, 255, 0.2)',
							 'rgba(255, 99, 132, 0.2)',
							 'rgba(54, 162, 235, 0.2)',
							 'rgba(255, 206, 86, 0.2)',
							 'rgba(75, 192, 192, 0.2)',
							 'rgba(153, 102, 255, 0.2)',
							 'rgba(255, 99, 132, 0.2)',
							 'rgba(54, 162, 235, 0.2)',
							 'rgba(255, 206, 86, 0.2)',
							 'rgba(75, 192, 192, 0.2)',
							 'rgba(153, 102, 255, 0.2)',
							 'rgba(255, 159, 64, 0.2)'
					 ],
					 borderColor: [
							 'rgba(255, 99, 132, 1)',
							 'rgba(54, 162, 235, 1)',
							 'rgba(255, 206, 86, 1)',
							 'rgba(75, 192, 192, 1)',
							 'rgba(153, 102, 255, 1)',
							 'rgba(255, 99, 132, 1)',
							 'rgba(54, 162, 235, 1)',
							 'rgba(255, 206, 86, 1)',
							 'rgba(75, 192, 192, 1)',
							 'rgba(153, 102, 255, 1)',
							 'rgba(255, 99, 132, 1)',
							 'rgba(54, 162, 235, 1)',
							 'rgba(255, 206, 86, 1)',
							 'rgba(75, 192, 192, 1)',
							 'rgba(153, 102, 255, 1)',
							 'rgba(255, 99, 132, 1)',
							 'rgba(54, 162, 235, 1)',
							 'rgba(255, 206, 86, 1)',
							 'rgba(75, 192, 192, 1)',
							 'rgba(153, 102, 255, 1)',
							 'rgba(255, 99, 132, 1)',
							 'rgba(54, 162, 235, 1)',
							 'rgba(255, 206, 86, 1)',
							 'rgba(75, 192, 192, 1)',
							 'rgba(153, 102, 255, 1)',
							 'rgba(255, 99, 132, 1)',
							 'rgba(54, 162, 235, 1)',
							 'rgba(255, 206, 86, 1)',
							 'rgba(75, 192, 192, 1)',
							 'rgba(153, 102, 255, 1)',
							 'rgba(255, 159, 64, 1)'
					 ],
					 borderWidth: 1
			 }]
	 },
	 options: {
			 scales: {
					 yAxes: [{
							 ticks: {
									 beginAtZero: true
							 }
					 }]
			 }
	 }
});
</script>

</div>
