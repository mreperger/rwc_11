<?php $i = 1 ?><form name="frm_resultados_usuario" action="resultados_usuario.php" method="post">
<div id="fixture_menu_usuario">
	<div class="titulo_resultados">
		<h2>INGRESE SUS RESULTADOS</h2>
		<?php if(isset($msg_err)){ echo "<div class='err_msg'>".$msg_err."</div>"; } ?>
	</div>
	<div class="fixture_resultados">
        
    	    <h2>Grupo A</h2>

        <table width="395">
            <?php while($rowPartidosA = mysql_fetch_assoc($rsPartidosA)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosA["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosA["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosA["equipo_visitante"], $conn);
				$estadio = new Estadio($rowPartidosA["id_estadio"], $conn);
              ?>
              <td width="50">
              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidosA["id"]; ?>" />
              	<input type="hidden" name="id_equipo_locatario_<?php echo $i; ?>" value="<?php echo $equipo_locatario->getId(); ?>" />
              	<input type="hidden" name="id_equipo_visitante_<?php echo $i; ?>" value="<?php echo $equipo_visitante->getId(); ?>" />
              	<?php echo $equipo_locatario->getNombre(); ?>
              </td>
              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
          	  <td width="17" align="center">vs</td>
              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
              <td width="50"><?php echo $equipo_visitante->getNombre(); ?></td>
            </tr>
            <?php $i = $i + 1; ?>
            <?php } ?>
        </table>
        
          <h2>Grupo B</h2>
          
        <table width="395">
            <?php while($rowPartidosB = mysql_fetch_assoc($rsPartidosB)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosB["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosB["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosB["equipo_visitante"], $conn);
				$estadio = new Estadio($rowPartidosB["id_estadio"], $conn);
              ?>
              <td width="50">
              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidosB["id"]; ?>" />
              	<input type="hidden" name="id_equipo_locatario_<?php echo $i; ?>" value="<?php echo $equipo_locatario->getId(); ?>" />
              	<input type="hidden" name="id_equipo_visitante_<?php echo $i; ?>" value="<?php echo $equipo_visitante->getId(); ?>" />
              	<?php echo $equipo_locatario->getNombre(); ?>
              </td>
              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
          	  <td width="17" align="center">vs</td>
              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
              <td width="50"><?php echo $equipo_visitante->getNombre(); ?></td>
            </tr>
            <?php $i = $i + 1; ?>
            <?php } ?>
        </table>
        
            <h2>Grupo C</h2>
        
        <table width="395">
            <?php while($rowPartidosC = mysql_fetch_assoc($rsPartidosC)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosC["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosC["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosC["equipo_visitante"], $conn);
				$estadio = new Estadio($rowPartidosC["id_estadio"], $conn);
              ?>
              <td width="50">
              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidosC["id"]; ?>" />
              	<input type="hidden" name="id_equipo_locatario_<?php echo $i; ?>" value="<?php echo $equipo_locatario->getId(); ?>" />
              	<input type="hidden" name="id_equipo_visitante_<?php echo $i; ?>" value="<?php echo $equipo_visitante->getId(); ?>" />
              	<?php echo $equipo_locatario->getNombre(); ?>
              </td>
              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
          	  <td width="17" align="center">vs</td>
              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
              <td width="50"><?php echo $equipo_visitante->getNombre(); ?></td>
            </tr>
            <?php $i = $i + 1; ?>
            <?php } ?>
        </table>
        
        	<h2>Grupo D</h2>
        
        <table width="395">
            <?php while($rowPartidosD = mysql_fetch_assoc($rsPartidosD)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosD["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosD["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosD["equipo_visitante"], $conn);
				$estadio = new Estadio($rowPartidosD["id_estadio"], $conn);
              ?>
              <td width="50">
              	<input type="hidden" name="id_partido_<?php echo $i; ?>" value="<?php echo $rowPartidosD["id"]; ?>" />
              	<input type="hidden" name="id_equipo_locatario_<?php echo $i; ?>" value="<?php echo $equipo_locatario->getId(); ?>" />
              	<input type="hidden" name="id_equipo_visitante_<?php echo $i; ?>" value="<?php echo $equipo_visitante->getId(); ?>" />
              	<?php echo $equipo_locatario->getNombre(); ?>
              </td>
              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_locatario_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_locatario"] ?>" ></td>
          	  <td width="17" align="center">vs</td>
              <td width="15" align="center"><input class="tamano_resultado" type="text" action="" method="post" name="puntos_equipo_visitante_<?php echo $i; ?>" value="<?php echo $resultados[$i]["puntos_equipo_visitante"] ?>"></td>
              <td width="50"><?php echo $equipo_visitante->getNombre(); ?></td>
            </tr>
            <?php $i = $i + 1; ?>
            <?php } ?>
        </table>
	</div>
		<div class="btn_resultados">
	      	<input type="submit" value="Ingresar Resultados" name="btn_resultado_usuario" >
		</div>
</div>
</form>