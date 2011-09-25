<?php $i = 1 ?><form name="frm_resultados_usuario" action="resultados_usuario.php" method="post">
<div id="fixture_menu_usuario">
	<div class="titulo_resultados">
		<h2>INGRESE SUS RESULTADOS DE LA FASE FINAL</h2>
		<?php if(isset($msg_err)){ echo "<div class='err_msg'>".$msg_err."</div>"; } ?>
	</div>
	<div class="fixture_resultados">
        
        <div class="cuartos">    
            <h2>Cuartos de Finales</h2>
            
			<!-- Fila partido -->
			<table width="395">
	            <?php $rowPartidoCF1 = mysql_fetch_assoc($rsPartidoCF1) ?>
	            <tr>
	              <td width="86" align="center"><?php echo convertString2Date($rowPartidoCF1["fecha"],$conn); ?> <em>CF1</em></td>
	              <?php
	              	$equipo_locatario = new Equipo($rowPartidoCF1["equipo_locatario"], $conn);
					$equipo_visitante = new Equipo($rowPartidoCF1["equipo_visitante"], $conn);
					$estadio = new Estadio($rowPartidoCF1["id_estadio"], $conn);
	              ?>
	              <td width="50">
	              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidoCF1["id"]; ?>" />
	              	<input type="hidden" name="id_equipo_locatario_<?php echo $i; ?>" value="<?php echo $equipo_locatario->getId(); ?>" />
	              	<input type="hidden" name="id_equipo_visitante_<?php echo $i; ?>" value="<?php echo $equipo_visitante->getId(); ?>" />
	              	<?php if($rowPartidoCF1["equipo_locatario"] != 0){ echo $equipo_locatario->getNombre(); }else{ echo "1ro Grupo C"; }?>
	              </td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
	          	  <td width="17" align="center">vs</td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
	              <td width="50"><?php if($rowPartidoCF1["equipo_visitante"] != 0){ echo $equipo_visitante->getNombre(); }else{ echo "2do Grupo D"; }?></td>
	            </tr>
	            <?php $i = $i + 1; ?>
	        </table>
	        <!-- FIN: Fila partido -->
       
	        <!-- Fila partido -->
			<table width="395">
	            <?php $rowPartidoCF2 = mysql_fetch_assoc($rsPartidoCF2) ?>
	            <tr>
	              <td width="86" align="center"><?php echo convertString2Date($rowPartidoCF2["fecha"],$conn); ?> <em>CF2</em></td>
	              <?php
	              	$equipo_locatario = new Equipo($rowPartidoCF2["equipo_locatario"], $conn);
					$equipo_visitante = new Equipo($rowPartidoCF2["equipo_visitante"], $conn);
					$estadio = new Estadio($rowPartidoCF2["id_estadio"], $conn);
	              ?>
	              <td width="50">
	              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidoCF2["id"]; ?>" />
	              	<input type="hidden" name="id_equipo_locatario_<?php echo $i; ?>" value="<?php echo $equipo_locatario->getId(); ?>" />
	              	<input type="hidden" name="id_equipo_visitante_<?php echo $i; ?>" value="<?php echo $equipo_visitante->getId(); ?>" />
	              	<?php if($rowPartidoCF2["equipo_locatario"] != 0){ echo $equipo_locatario->getNombre(); }else{ echo "1ro Grupo B"; }?>
	              </td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
	          	  <td width="17" align="center">vs</td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
	              <td width="50"><?php if($rowPartidoCF2["equipo_visitante"] != 0){ echo $equipo_visitante->getNombre(); }else{ echo "2do Grupo A"; }?></td>
	            </tr>
	            <?php $i = $i + 1; ?>
	        </table>
	        <!-- FIN: Fila partido -->
	        
	        <!-- Fila partido -->
			<table width="395">
	            <?php $rowPartidoCF3 = mysql_fetch_assoc($rsPartidoCF3) ?>
	            <tr>
	              <td width="86" align="center"><?php echo convertString2Date($rowPartidoCF3["fecha"],$conn); ?> <em>CF3</em></td>
	              <?php
	              	$equipo_locatario = new Equipo($rowPartidoCF3["equipo_locatario"], $conn);
					$equipo_visitante = new Equipo($rowPartidoCF3["equipo_visitante"], $conn);
					$estadio = new Estadio($rowPartidoCF3["id_estadio"], $conn);
	              ?>
	              <td width="50">
	              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidoCF3["id"]; ?>" />
	              	<input type="hidden" name="id_equipo_locatario_<?php echo $i; ?>" value="<?php echo $equipo_locatario->getId(); ?>" />
	              	<input type="hidden" name="id_equipo_visitante_<?php echo $i; ?>" value="<?php echo $equipo_visitante->getId(); ?>" />
	              	<?php if($rowPartidoCF3["equipo_locatario"] != 0){ echo $equipo_locatario->getNombre(); }else{ echo "1ro Grupo D"; }?>
	              </td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
	          	  <td width="17" align="center">vs</td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
	              <td width="50"><?php if($rowPartidoCF3["equipo_visitante"] != 0){ echo $equipo_visitante->getNombre(); }else{ echo "2do Grupo C"; }?></td>
	            </tr>
	            <?php $i = $i + 1; ?>
	        </table>
	        <!-- FIN: Fila partido -->
	       
	        <!-- Fila partido -->
			<table width="395">
	            <?php $rowPartidoCF4 = mysql_fetch_assoc($rsPartidoCF4) ?>
	            <tr>
	              <td width="86" align="center"><?php echo convertString2Date($rowPartidoCF4["fecha"],$conn); ?> <em>CF4</em></td>
	              <?php
	              	$equipo_locatario = new Equipo($rowPartidoCF4["equipo_locatario"], $conn);
					$equipo_visitante = new Equipo($rowPartidoCF4["equipo_visitante"], $conn);
					$estadio = new Estadio($rowPartidoCF4["id_estadio"], $conn);
	              ?>
	              <td width="50">
	              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidoCF4["id"]; ?>" />
	              	<input type="hidden" name="id_equipo_locatario_<?php echo $i; ?>" value="<?php echo $equipo_locatario->getId(); ?>" />
	              	<input type="hidden" name="id_equipo_visitante_<?php echo $i; ?>" value="<?php echo $equipo_visitante->getId(); ?>" />
	              	<?php if($rowPartidoCF4["equipo_locatario"] != 0){ echo $equipo_locatario->getNombre(); }else{ echo "1ro Grupo A"; }?>
	              </td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
	          	  <td width="17" align="center">vs</td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
	              <td width="50"><?php if($rowPartidoCF4["equipo_visitante"] != 0){ echo $equipo_visitante->getNombre(); }else{ echo "2do Grupo B"; }?></td>
	            </tr>
	            <?php $i = $i + 1; ?>
	        </table>
	        <!-- FIN: Fila partido -->
       	</div>
        <div class="semis">
         
	        <h2>Semifinales</h2>
	            
			<!-- Fila partido -->
			<table width="580">
	            <tr>
	              <td align="center" width="95">05:00 - 16/10  <em>SF1</em></td>
	              <td style="width:155px">
	              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidoSF1["id"]; ?>" />              	
	              	<?php
	              		$sql_equiposA = "SELECT * FROM equipos ORDER BY nombre ASC";
						$rs_equiposA = mysql_query($sql_equiposA) or die(mysql_error());
						
						$sql_equipos = "SELECT * FROM equipos ORDER BY nombre ASC";
						$rs_equipos = mysql_query($sql_equipos) or die(mysql_error());
	              	?>
	              	<select name="id_equipo_locatario_<?php echo $i; ?>">
	              		<option value="0" selected="selected">- Ganador <strong>CF1</strong> -</option>
	      				<?php while ($row_equiposA = mysql_fetch_assoc($rs_equiposA)){?>
	              		<option <?php if($resultados[$i]["id_equipo_locatario"] == $row_equiposA["id"]){ echo "selected='selected'"; } ?> value="<?php echo $row_equiposA["id"] ?>"><?php echo $row_equiposA["nombre"] ?></option>
	              		<?php } ?>
	              	</select>
	              </td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
	          	  <td width="17" align="center">vs</td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
	              <td style="width:155px">
	              	<select name="id_equipo_visitante_<?php echo $i; ?>">
	              		<option value="0" selected="selected">- Ganador <strong>CF2</strong> -</option>
	      				<?php while ($row_equipos = mysql_fetch_assoc($rs_equipos)){?>
	              		<option <?php if($resultados[$i]["id_equipo_visitante"] == $row_equipos["id"]){ echo "selected='selected'"; } ?> value="<?php echo $row_equipos["id"] ?>"><?php echo $row_equipos["nombre"] ?></option>
	              		<?php } ?></td>
	             	</select>
	            </tr>
	            <?php $i = $i + 1; ?>
	        </table>
	        <!-- FIN: Fila partido -->
	        
	       
	        
	        <!-- Fila partido -->
			<table width="580">
	            <tr>
	              <td align="center" width="95">05:00 - 16/10  <em>SF2</em></td>
	              <td style="width:155px">
	              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidoSF2["id"]; ?>" />              	
	              	<?php
	              		$sql_equiposA = "SELECT * FROM equipos ORDER BY nombre ASC";
						$rs_equiposA = mysql_query($sql_equiposA) or die(mysql_error());
						
						$sql_equipos = "SELECT * FROM equipos ORDER BY nombre ASC";
						$rs_equipos = mysql_query($sql_equipos) or die(mysql_error());
	              	?>
	              	<select name="id_equipo_locatario_<?php echo $i; ?>">
	              		<option value="0" selected="selected">- Ganador <strong>CF3</strong> -</option>
	      				<?php while ($row_equiposA = mysql_fetch_assoc($rs_equiposA)){?>
	              		<option <?php if($resultados[$i]["id_equipo_locatario"] == $row_equiposA["id"]){ echo "selected='selected'"; } ?> value="<?php echo $row_equiposA["id"] ?>"><?php echo $row_equiposA["nombre"] ?></option>
	              		<?php } ?>
	              	</select>
	              </td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
	          	  <td width="17" align="center">vs</td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
	              <td style="width:155px">
	              	<select name="id_equipo_visitante_<?php echo $i; ?>">
	              		<option value="0" selected="selected">- Ganador <strong>CF4</strong> -</option>
	      				<?php while ($row_equipos = mysql_fetch_assoc($rs_equipos)){?>
	              		<option <?php if($resultados[$i]["id_equipo_visitante"] == $row_equipos["id"]){ echo "selected='selected'"; } ?> value="<?php echo $row_equipos["id"] ?>"><?php echo $row_equipos["nombre"] ?></option>
	              		<?php } ?></td>
	             	</select>
	            </tr>
	            <?php $i = $i + 1; ?>
	        </table>
	        <!-- FIN: Fila partido -->
       </div>
       
       <div class="tercer">
	       <h2>Tercer Puesto</h2>
	            
			<!-- Fila partido -->
			<table width="580">
	            <tr>
	              <td align="center" width="95">04:30 - 21/10 </td>
	              <td style="width:155px">
	              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidoTERCER["id"]; ?>" />              	
	              	<?php
	              		$sql_equiposA = "SELECT * FROM equipos ORDER BY nombre ASC";
						$rs_equiposA = mysql_query($sql_equiposA) or die(mysql_error());
						
						$sql_equipos = "SELECT * FROM equipos ORDER BY nombre ASC";
						$rs_equipos = mysql_query($sql_equipos) or die(mysql_error());
	              	?>
	              	<select name="id_equipo_locatario_<?php echo $i; ?>">
	              		<option value="0" selected="selected">- Perdedor <strong>SF1</strong> -</option>
	      				<?php while ($row_equiposA = mysql_fetch_assoc($rs_equiposA)){?>
	              		<option <?php if($resultados[$i]["id_equipo_locatario"] == $row_equiposA["id"]){ echo "selected='selected'"; } ?> value="<?php echo $row_equiposA["id"] ?>"><?php echo $row_equiposA["nombre"] ?></option>
	              		<?php } ?>
	              	</select>
	              </td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
	          	  <td width="17" align="center">vs</td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
	              <td style="width:155px">
	              	<select name="id_equipo_visitante_<?php echo $i; ?>">
	              		<option value="0" selected="selected">- Perdedor <strong>SF2</strong> -</option>
	      				<?php while ($row_equipos = mysql_fetch_assoc($rs_equipos)){?>
	              		<option <?php if($resultados[$i]["id_equipo_visitante"] == $row_equipos["id"]){ echo "selected='selected'"; } ?> value="<?php echo $row_equipos["id"] ?>"><?php echo $row_equipos["nombre"] ?></option>
	              		<?php } ?></td>
	             	</select>
	            </tr>
	            <?php $i = $i + 1; ?>
	        </table>
	        <!-- FIN: Fila partido -->
       </div>
       
       <div class="final">
	       <h2>Final</h2>
	            
			<!-- Fila partido -->
			<table width="580">
	            <tr>
	              <td align="center" width="95">05:00 - 23/10</td>
	              <td style="width:155px">
	              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidoFINAL["id"]; ?>" />              	
	              	<?php
	              		$sql_equiposA = "SELECT * FROM equipos ORDER BY nombre ASC";
						$rs_equiposA = mysql_query($sql_equiposA) or die(mysql_error());
						
						$sql_equipos = "SELECT * FROM equipos ORDER BY nombre ASC";
						$rs_equipos = mysql_query($sql_equipos) or die(mysql_error());
	              	?>
	              	<select name="id_equipo_locatario_<?php echo $i; ?>">
	              		<option value="0" selected="selected">- Ganador <strong>SF1</strong> -</option>
	      				<?php while ($row_equiposA = mysql_fetch_assoc($rs_equiposA)){?>
	              		<option <?php if($resultados[$i]["id_equipo_locatario"] == $row_equiposA["id"]){ echo "selected='selected'"; } ?> value="<?php echo $row_equiposA["id"] ?>"><?php echo $row_equiposA["nombre"] ?></option>
	              		<?php } ?>
	              	</select>
	              </td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
	          	  <td width="17" align="center">vs</td>
	              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
	              <td style="width:155px">
	              	<select name="id_equipo_visitante_<?php echo $i; ?>">
	              		<option value="0" selected="selected">- Ganador <strong>SF2</strong> -</option>
	      				<?php while ($row_equipos = mysql_fetch_assoc($rs_equipos)){?>
	              		<option <?php if($resultados[$i]["id_equipo_visitante"] == $row_equipos["id"]){ echo "selected='selected'"; } ?> value="<?php echo $row_equipos["id"] ?>"><?php echo $row_equipos["nombre"] ?></option>
	              		<?php } ?></td>
	             	</select>
	            </tr>
	            <?php $i = $i + 1; ?>
	        </table>
	        <!-- FIN: Fila partido -->
		</div>
	</div>
		<div class="btn_resultados">
	      	<input type="submit" value="Ingresar Resultados" name="btn_resultado_usuario" >
		</div>
</div>
</form>	