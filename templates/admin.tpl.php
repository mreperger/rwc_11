<div id="fixture_menu">
	<div class="fixture">
		<h2>Grupo A</h2>
        
        <?php
            $sql_partidosA = "SELECT * FROM partidos WHERE grupo = 'A' ORDER BY fecha ASC";
            $rsPartidosA = mysql_query($sql_partidosA,$conn) or die(mysql_error());
        ?>
        
        <table width="500">
            <?php while($rowPartidosA = mysql_fetch_assoc($rsPartidosA)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosA["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosA["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosA["equipo_visitante"], $conn);
              ?>
          	  <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosA["puntos_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosA["puntos_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidosA["id"]; ?>"><p1>Ingresar resultado<p1></a></td>
            </tr>
            <?php } ?>
        </table>
        
          <h2>Grupo B</h2>
        <?php
            $sql_partidosB = "SELECT * FROM partidos WHERE grupo = 'B' ORDER BY fecha ASC";
            $rsPartidosB = mysql_query($sql_partidosB,$conn) or die(mysql_error());
        ?>
        
        <table width="500">
            <?php while($rowPartidosB = mysql_fetch_assoc($rsPartidosB)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosB["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosB["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosB["equipo_visitante"], $conn);
              ?>
              <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosB["puntos_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosB["puntos_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidosB["id"]; ?>"><p1>Ingresar resultado<p1></a></td>
            </tr>
            <?php } ?>
        </table>
        
            <h2>Grupo C</h2>
        <?php
            $sql_partidosC = "SELECT * FROM partidos WHERE grupo = 'C' ORDER BY fecha ASC";
            $rsPartidosC = mysql_query($sql_partidosC,$conn) or die(mysql_error());
        ?>
        
        <table width="500">
            <?php while($rowPartidosC = mysql_fetch_assoc($rsPartidosC)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosC["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosC["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosC["equipo_visitante"], $conn);
              ?>
              <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosC["puntos_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosC["puntos_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidosC["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        
        	<h2>Grupo D</h2>
        <?php
            $sql_partidosD = "SELECT * FROM partidos WHERE grupo = 'D' ORDER BY fecha ASC";
            $rsPartidosD = mysql_query($sql_partidosD,$conn) or die(mysql_error());
        ?>
        
        <table width="500">
            <?php while($rowPartidosD = mysql_fetch_assoc($rsPartidosD)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosD["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosD["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosD["equipo_visitante"], $conn);
              ?>
              <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosD["puntos_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosD["puntos_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidosD["id"]; ?>"><p1>Ingresar resultado<p1></a></td>
            </tr>
            <?php } ?>
        </table>
	</div>
	
	<div class="fixture_finales">
            <h2>Cuartos de Finales</h2>
            
            <table width="500">
            <?php while($rowPartidoCF1 = mysql_fetch_assoc($rsPartidoCF1)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoCF1["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoCF1["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoCF1["equipo_locatario"], $conn);
					$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "1ro Grupo A";
              	}
              	if($rowPartidoCF1["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoCF1["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "1er Tercero";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF1["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF1["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoS1["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        <table width="500">
            <?php while($rowPartidoCF2 = mysql_fetch_assoc($rsPartidoCF2)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoCF2["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoCF2["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoCF2["equipo_locatario"], $conn);
              		$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "2do Grupo A";
              	}
              	if($rowPartidoCF2["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoCF2["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Grupo C";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF2["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF2["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoCF2["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        <table width="500">
            <?php while($rowPartidoCF3 = mysql_fetch_assoc($rsPartidoCF3)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoCF3["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoCF3["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoCF3["equipo_locatario"], $conn);
              		$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "1ro Grupo B";
              	}
              	if($rowPartidoCF3["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoCF3["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Tercero";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF3["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF3["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoCF3["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        <table width="500">
            <?php while($rowPartidoCF4 = mysql_fetch_assoc($rsPartidoCF4)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoCF4["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoCF4["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoCF4["equipo_locatario"], $conn);
              		$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "1ro Grupo C";
              	}
              	if($rowPartidoCF4["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoCF4["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Grupo B";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF4["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF4["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoCF4["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        
        <h2>Semifinales</h2>
        <table width="500">
            <?php while($rowPartidoSF1 = mysql_fetch_assoc($rsPartidoSF1)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoSF1["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoSF1["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoSF1["equipo_locatario"], $conn);
					$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "Ganador CF1";
              	}
              	if($rowPartidoSF1["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoSF1["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Ganador CF2";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoSF1["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoSF1["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoSF1["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        <table width="500">
            <?php while($rowPartidoSF2 = mysql_fetch_assoc($rsPartidoSF2)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoSF2["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoSF2["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoSF2["equipo_locatario"], $conn);
              		$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "Ganador CF3";
              	}
              	if($rowPartidoSF2["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoSF2["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Ganador CF4";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoSF2["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoSF2["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoSF2["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        
        <h2>Tercer Puesto</h2>
            <table width="500">
            <?php while($rowPartidoTERCER = mysql_fetch_assoc($rsPartidoTERCER)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoTERCER["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoTERCER["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoTERCER["equipo_locatario"], $conn);
					$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "Perdedor SF1";
              	}
              	if($rowPartidoTERCER["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoTERCER["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Perdedor SF2";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoTERCER["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoTERCER["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoTERCER["id"]; ?>">Ingresar resultado</a></td>
              <td></td>
            </tr>
            <?php } ?>
        </table>
        
        <h2>Final</h2>
            <table width="500">
            <?php while($rowPartidoFINAL = mysql_fetch_assoc($rsPartidoFINAL)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoFINAL["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoFINAL["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoFINAL["equipo_locatario"], $conn);
					$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "Ganador SF1";
              	}
              	if($rowPartidoFINAL["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoFINAL["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Ganador SF2";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoFINAL["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoFINAL["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoFINAL["id"]; ?>">Ingresar resultado</a></td>
              <td></td>
            </tr>
            <?php } ?>
        </table>
	</div>
</div>