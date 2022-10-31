<?php
$iplist = array
(
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
  array ("ip","nombre asigando"),
array ("ip","nombre asigando"),
);



//variables primer fila
  $i = 0; //seleciona solo una ip
  $ip = $iplist[$i][0]; // variable de la seleccion de columna del array
  $des = $iplist[$i][1]; // vaiable de seleccion de columnas del arrary
  $jul = shell_exec("ping -n 1 -w 1 $ip"); //instruccion de ping a la lista [0]
  //$status = "TTL=255";
 //Print_r($jul."</br>");
//variables segunda fila
  $i2 = 1; //seleciona solo una ip
  $ip2 = $iplist[$i2][0]; // variable de la seleccion de columna del array
  $des2 = $iplist[$i2][1]; // vaiable de seleccion de columnas del arrary
  $jul2 = shell_exec("ping  -n 1 -w 1 $ip2"); //instruccion de ping a la lista [0]

////variables tercer fila
  $i3 = 2; //seleciona solo una ip
  $ip3 = $iplist[$i3][0]; // variable de la seleccion de columna del array
  $des3 = $iplist[$i3][1]; // vaiable de seleccion de columnas del arrary
  $jul3 = shell_exec("ping -n 1 -w 1 $ip3"); //instruccion de ping a la lista [0]

//  Print_r($jul3."</br>");
  //variables cuarta fila
    $i4 = 3; //seleciona solo una ip
    $ip4 = $iplist[$i4][0]; // variable de la seleccion de columna del array
    $des4 = $iplist[$i4][1]; // vaiable de seleccion de columnas del arrary
    $jul4 = shell_exec("ping -n 1 -w 1 $ip4"); //instruccion de ping a la lista [0]

  //  Print_r($jul4."</br>");
  //variables quinta fila
    $i5 = 4; //seleciona solo una ip
    $ip5 = $iplist[$i5][0]; // variable de la seleccion de columna del array
    $des5 = $iplist[$i5][1]; // vaiable de seleccion de columnas del arrary
    $jul5 = shell_exec("ping -n 1 -w 1 $ip5"); //instruccion de ping a la lista [0]

  //Print_r($jul5."</br>");
  //variables segunda fila
    $i6 = 5; //seleciona solo una ip
    $ip6 = $iplist[$i6][0]; // variable de la seleccion de columna del array
    $des6 = $iplist[$i6][1]; // vaiable de seleccion de columnas del arrary
    $jul6 = shell_exec("ping -n 1 -w 1 $ip6"); //instruccion de ping a la lista [0]
    //$status6 = "TTL=128";
   //Print_r($jul6."</br>");
  //  Print_r($jul6	."</br>");

  		//inicio de la tabla
  			echo "<font face=courier new >";
  			echo "<table border=1 style=border-collapse:collapse>
  			<th colspan=4>Ping enlaces de Sedes Angeles</th>
  			<tr>
  			<td align=center width=50>#</td>
  			<td align=center width=300>ip/url</td>
  			<td align=center width=200> Status </td>
  			<td align=center width=350>Descripcion</td>
  			</tr>";
  /*primer fila de la tabla*/
  		  echo "<tr>";
  			echo "<td align=center>".$i."</td>";
  			echo "<td align=center>".$iplist[$i][0]."</td>";
  		  if(strpos($jul,"Red de destino inaccesible")){
  		      echo "<td align=center style=color:red>Red de destino inaccesible	</td>";
  		      }elseif (strpos($jul,"Host de destino inaccesible")){
  		      echo "<td align=center style=color:Red>Host de destino inaccesible</td>";
  		      }elseif (strpos($jul,"TTL=128")) {
  		      echo "<td align=center style=color:green>ping exitoso TTL=128</td>";
  				}elseif (strpos($jul,"TTL=255")) {
  				echo "<td align=center style=color:green>ping exitoso TTL=255</td>";
  				}else{
  		      echo "<td align=center style=color:black>No se envio ping</td>";
  		          }

  		   echo "<td align=center>".$des."</td>";
  		   echo "</tr>";

  /*Segunda fila de la tabla*/
  			 echo "<tr>";
   			echo "<td align=center>".$i2."</td>";
   			echo "<td align=center>".$iplist[$i2][0]."</td>";
   		  if(strpos($jul2,"Red de destino inaccesible")){
   		      echo "<td align=center style=color:red>Red de destino inaccesible	</td>";
  				}elseif (strpos($jul2,"Host de destino inaccesible")){
   		      echo "<td align=center style=color:red>Host de destino inaccesible</td>";
  				}elseif (strpos($jul2,"TTL=128")) {
   		      echo "<td align=center style=color:green>ping exitoso TTL=128</td>";
  				}elseif (strpos($jul2,"TTL=255")) {
  					echo "<td align=center style=color:green>ping exitoso TTL=255</td>";
  					}else{
   		      echo "<td align=center style=color:black>No se envio ping</td>";
   		          }
   		   echo "<td align=center>".$des2."</td>";
   		   echo "</tr>";

  		 /*tercer fila de la tabla*/
  			 		 echo "<tr>";
  			 			echo "<td align=center>".$i3."</td>";
  			 			echo "<td align=center>".$iplist[$i3][0]."</td>";
  			 		  if(strpos($jul3,"Red de destino inaccesible")){
  			 		      echo "<td align=center style=color:red>Red de destino inaccesible	</td>";
  			 			}elseif (strpos($jul3,"Host de destino inaccesible")){
  			 		      echo "<td align=center style=color:red>Host de destino inaccesible</td>";
  			 			}elseif (strpos($jul3,"TTL=128")) {
  			 		      echo "<td align=center style=color:green>ping exitoso TTL=128</td>";
  							}elseif (strpos($jul3,"TTL=255")) {
  								echo "<td align=center style=color:green>ping exitoso TTL=255</td>";
  								}else{
  			 		      echo "<td align=center style=color:black>No se envio ping</td>";
  			 		          }
  			 		   echo "<td align=center>".$des3."</td>";
  			 		   echo "</tr>";

  			 /*cuarta fila de la tabla*/
  				 			 echo "<tr>";
  				  			echo "<td align=center>".$i4."</td>";
  				  			echo "<td align=center>".$iplist[$i4][0]."</td>";
  				  		  if(strpos($jul4,"Red de destino inaccesible")){
  				  		      echo "<td align=center style=color:red>Red de destino inaccesible	</td>";
  				 				}elseif (strpos($jul4,"Host de destino inaccesible")){
  				  		      echo "<td align=center style=color:red>Host de destino inaccesible</td>";
  				 				}elseif (strpos($jul4,"TTL=128")) {
  				  		      echo "<td align=center style=color:green>ping exitoso TTL=128</td>";
  									}elseif (strpos($jul4,"TTL=255")) {
  										echo "<td align=center style=color:green>ping exitoso TTL=255</td>";
  										}else{
  				  		      echo "<td align=center style=color:black>No se envio ping</td>";
  				  		          }
  				  		   echo "<td align=center>".$des4."</td>";
  				  		   echo "</tr>";
  					 /*Quinta fila de la tabla*/
  						 			 echo "<tr>";
  						  			echo "<td align=center>".$i5."</td>";
  						  			echo "<td align=center>".$iplist[$i5][0]."</td>";
  						  		  if(strpos($jul5,"Red de destino inaccesible")){
  						  		      echo "<td align=center style=color:red>Red de destino inaccesible	</td>";
  						 				}elseif (strpos($jul5,"Host de destino inaccesible")){
  						  		      echo "<td align=center style=color:red>Host de destino inaccesible</td>";
  						 				}elseif (strpos($jul5,"TTL=128")) {
  						  		      echo "<td align=center style=color:green>ping exitoso TTL=128</td>";
  					  		      }elseif (strpos($jul5,"TTL=255")) {
  											echo "<td align=center style=color:green>ping exitoso TTL=255</td>";
  											}else{
  						  		      echo "<td align=center style=color:black>No se envio ping</td>";
  			  		          }
  							  		   echo "<td align=center>".$des5."</td>";
  							  		   echo "</tr>";

  											 /*sexta fila de la tabla*/
  											echo "<tr>";
  											echo "<td align=center>".$i6."</td>";
  											echo "<td align=center>".$iplist[$i6][0]."</td>";
  												  if(strpos($jul6,"Red de destino inaccesible")){
  												      echo "<td align=center style=color:red>Red de destino inaccesible	</td>";
  													}elseif (strpos($jul6,"Host de destino inaccesible")){
  												      echo "<td align=center style=color:red>Host de destino inaccesible</td>";
  												 	}elseif (strpos($jul6,"TTL=128")) {
  												      echo "<td align=center style=color:green>ping exitoso TTL=128</td>";
  											     }elseif (strpos($jul6,"TTL=255")) {
  									 				echo "<td align=center style=color:green>ping exitoso TTL=255</td>";
  									 				}else{
  												      echo "<td align=center style=color:black>No se envio ping</td>";
  									  		   }
  													   echo "<td align=center>".$des6."</td>";
  													   echo "</tr>";


  		echo "</table>";
  		echo "</font>";

 ?>
