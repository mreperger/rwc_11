<div id="fixture_menu">
	<?php if(isset($_GET["res"])){ ?><h2>Fixture de <em><?php echo Usuario::getNombreUsuario($_GET["res"],$conn); ?></em></h2><?php } ?>
        <div class="fixture">
        	
     	<h2>Grupo A</h2>
        
        <table width="500">
            <?php while($rowPartidosA = mysql_fetch_assoc($rsPartidosA)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosA["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosA["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosA["equipo_visitante"], $conn);
				$estadio = new Estadio($rowPartidosA["id_estadio"], $conn);
              ?>
              <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosA["puntos_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosA["puntos_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td width="120" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
            </tr>
            <?php } ?>
        </table>
        
          <h2>Grupo B</h2>
        
        <table width="500">
            <?php while($rowPartidosB = mysql_fetch_assoc($rsPartidosB)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosB["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosB["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosB["equipo_visitante"], $conn);
				$estadio = new Estadio($rowPartidosB["id_estadio"], $conn);
              ?>
              <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosB["puntos_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosB["puntos_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td width="120" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
            </tr>
            <?php } ?>
        </table>
        
            <h2>Grupo C</h2>
        
        <table width="500">
            <?php while($rowPartidosC = mysql_fetch_assoc($rsPartidosC)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosC["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosC["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosC["equipo_visitante"], $conn);
				$estadio = new Estadio($rowPartidosC["id_estadio"], $conn);
              ?>
              <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosC["puntos_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosC["puntos_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td width="120" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
            </tr>
            <?php } ?>
        </table>
        
        <h2>Grupo D</h2>
        
        <table width="500">
            <?php while($rowPartidosD = mysql_fetch_assoc($rsPartidosD)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosD["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosD["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosD["equipo_visitante"], $conn);
				$estadio = new Estadio($rowPartidosD["id_estadio"], $conn);
              ?>
              <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosD["puntos_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosD["puntos_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td width="120" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
        
	<?php if(!isset($_GET["res"])){ ?>
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
              		$equipo_locatario = "1ro Grupo C";
              	}
              	if($rowPartidoCF1["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoCF1["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Grupo D";
              	}
				
				$estadio = new Estadio($rowPartidoCF1["id_estadio"], $conn);
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF1["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF1["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td width="69" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
              <td><em>C1</em></td>
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
              		$equipo_locatario = "1ro Grupo B";
              	}
              	if($rowPartidoCF2["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoCF2["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Grupo A";
              	}
				
				$estadio = new Estadio($rowPartidoCF2["id_estadio"], $conn);
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF2["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF2["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td width="69" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
              <td><em>C2</em></td>
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
              		$equipo_locatario = "1ro Grupo D";
              	}
              	if($rowPartidoCF3["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoCF3["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Grupo C";
              	}
				
				$estadio = new Estadio($rowPartidoCF3["id_estadio"], $conn);
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF3["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF3["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td width="69" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
              <td><em>C3</em></td>
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
              		$equipo_locatario = "1ro Grupo A";
              	}
              	if($rowPartidoCF4["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoCF4["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Grupo B";
              	}
				
				$estadio = new Estadio($rowPartidoCF4["id_estadio"], $conn);
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF4["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoCF4["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td width="69" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
              <td><em>C4</em></td>
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
              		$equipo_locatario = "Ganador C1";
              	}
              	if($rowPartidoSF1["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoSF1["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Ganador C2";
              	}
				
				$estadio = new Estadio($rowPartidoSF1["id_estadio"], $conn);
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoSF1["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoSF1["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td width="69" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
              <td><em>S1</em></td>
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
              		$equipo_locatario = "Ganador C3";
              	}
              	if($rowPartidoSF2["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoSF2["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Ganador C4";
              	}
				
				$estadio = new Estadio($rowPartidoSF2["id_estadio"], $conn);
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoSF2["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoSF2["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td width="69" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
              <td><em>S2</em></td>
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
              		$equipo_locatario = "Perdedor S1";
              	}
              	if($rowPartidoTERCER["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoTERCER["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Perdedor S2";
              	}
				
				$estadio = new Estadio($rowPartidoTERCER["id_estadio"], $conn);
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoTERCER["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoTERCER["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td width="69" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
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
              		$equipo_locatario = "Ganador S1";
              	}
              	if($rowPartidoFINAL["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoFINAL["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Ganador S2";
              	}
				
				$estadio = new Estadio($rowPartidoFINAL["id_estadio"], $conn);
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoFINAL["puntos_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoFINAL["puntos_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td width="84" class="letra_cursiva"><?php echo $estadio->getNombreEstadio(); ?></td>
              <td></td>
            </tr>
            <?php } ?>
        </table>
        <?php } ?>
        <?php if(isset($_GET["res"]) && $_GET["res"]>0){?><h2 class="puntos">Puntos: <?php echo PuntosUsuario:: CalcularPuntos($_GET["res"], $conn); ?></h2><?php } ?>        	
        </div>
	</div>