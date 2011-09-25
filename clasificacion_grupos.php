<?php session_start(); ?>
<?php require_once("includes/ini.php"); ?>
<?php require_once("classes/equipo.class.php"); ?>
<?php require_once("classes/grupo.class.php"); ?>

<?php
	//Cargar equipos con sus datos
	$grupoA = new Grupo("A",$conn);
	$grupoB = new Grupo("B",$conn);
	$grupoC = new Grupo("C",$conn);
	$grupoD = new Grupo("D",$conn);
	//Ordenar equipos por grupos
?>


<?php include("templates/html_head.tpl.php"); ?>
<?php include("templates/menu.tpl.php"); ?>
    <?php if($DEBUG == 1){ echo "<pre>"; var_dump($grupoA); echo "</pre>"; } ?>
    <div id="grupos_menu">
     		<h2>Grupo A</h2>
    	<div class="grupo">    	
            <table align="center">
                    <tr>
                        <td>NOMBRE</td>
                        <td align="center">PJ</td>
                        <td align="center">PG</td>
                        <td align="center">PE</td>
                        <td align="center">PP</td>
                        <td align="center">PC</td>
                        <td align="center">PR</td>
                        <td align="center">TC</td>
                        <td align="center">TR</td>
                        <td align="center">PB</td>
                        <td align="center">PTS</td>
                    </tr>
                    <?php
                    foreach($grupoA->getEquipos() as $equipo){
                    ?>
                    	<tr>
	                        <td><?php echo $equipo->getNombre(); ?></td>
	                        <td align="center"><?php echo $equipo->getPJ(); ?></td>
	                        <td align="center"><?php echo $equipo->getPG(); ?></td>
	                        <td align="center"><?php echo $equipo->getPE(); ?></td>
	                        <td align="center"><?php echo $equipo->getPP(); ?></td>
	                        <td align="center"><?php echo $equipo->getPC(); ?></td>
	                        <td align="center"><?php echo $equipo->getPR(); ?></td>
	                        <td align="center"><?php echo $equipo->getTC(); ?></td>
	                        <td align="center"><?php echo $equipo->getTR(); ?></td>
	                        <td align="center"><?php echo $equipo->getPB(); ?></td>
	                        <td align="center"><?php echo $equipo->getPTS(); ?></td>
                    	</tr>
                   	<?php } ?>
            </table>
		</div>            
            <h2>Grupo B</h2>
      	<div class="grupo">    	
            <table align="center">
                    <tr>
                        <td>NOMBRE</td>
                        <td align="center">PJ</td>
                        <td align="center">PG</td>
                        <td align="center">PE</td>
                        <td align="center">PP</td>
                        <td align="center">PC</td>
                        <td align="center">PR</td>
                        <td align="center">TC</td>
                        <td align="center">TR</td>
                        <td align="center">PB</td>
                        <td align="center">PTS</td>
                    </tr>
                    <?php
                    foreach($grupoB->getEquipos() as $equipo){
                    ?>
                    	<tr>
	                        <td><?php echo $equipo->getNombre(); ?></td>
	                        <td align="center"><?php echo $equipo->getPJ(); ?></td>
	                        <td align="center"><?php echo $equipo->getPG(); ?></td>
	                        <td align="center"><?php echo $equipo->getPE(); ?></td>
	                        <td align="center"><?php echo $equipo->getPP(); ?></td>
	                        <td align="center"><?php echo $equipo->getPC(); ?></td>
	                        <td align="center"><?php echo $equipo->getPR(); ?></td>
	                        <td align="center"><?php echo $equipo->getTC(); ?></td>
	                        <td align="center"><?php echo $equipo->getTR(); ?></td>
	                        <td align="center"><?php echo $equipo->getPB(); ?></td>
	                        <td align="center"><?php echo $equipo->getPTS(); ?></td>
                    	</tr>
                  	<?php } ?>
            </table>
      	</div>
			<h2>Grupo C</h2>
      	<div class="grupo">    	
            <table align="center">
                    <tr>
                        <td>NOMBRE</td>
                        <td align="center">PJ</td>
                        <td align="center">PG</td>
                        <td align="center">PE</td>
                        <td align="center">PP</td>
                        <td align="center">PC</td>
                        <td align="center">PR</td>
                        <td align="center">TC</td>
                        <td align="center">TR</td>
                        <td align="center">PB</td>
                        <td align="center">PTS</td>
                    </tr>
                    <?php
                    foreach($grupoC->getEquipos() as $equipo){
                    	?>
                    	<tr>
	                        <td><?php echo $equipo->getNombre(); ?></td>
	                        <td align="center"><?php echo $equipo->getPJ(); ?></td>
	                        <td align="center"><?php echo $equipo->getPG(); ?></td>
	                        <td align="center"><?php echo $equipo->getPE(); ?></td>
	                        <td align="center"><?php echo $equipo->getPP(); ?></td>
	                        <td align="center"><?php echo $equipo->getPC(); ?></td>
	                        <td align="center"><?php echo $equipo->getPR(); ?></td>
	                        <td align="center"><?php echo $equipo->getTC(); ?></td>
	                        <td align="center"><?php echo $equipo->getTR(); ?></td>
	                        <td align="center"><?php echo $equipo->getPB(); ?></td>
	                        <td align="center"><?php echo $equipo->getPTS(); ?></td>
                    	</tr>
                    <?php } ?>
			</table>
        </div>
			<h2>Grupo D</h2>
      	<div class="grupo">
            <table align="center">
                    <tr>
                        <td>NOMBRE</td>
                        <td align="center">PJ</td>
                        <td align="center">PG</td>
                        <td align="center">PE</td>
                        <td align="center">PP</td>
                        <td align="center">PC</td>
                        <td align="center">PR</td>
                        <td align="center">TC</td>
                        <td align="center">TR</td>
                        <td align="center">PB</td>
                        <td align="center">PTS</td>
                    </tr>
                    <?php
                    foreach($grupoD->getEquipos() as $equipo){
                    	?>
                    	<tr>
	                        <td><?php echo $equipo->getNombre(); ?></td>
	                        <td align="center"><?php echo $equipo->getPJ(); ?></td>
	                        <td align="center"><?php echo $equipo->getPG(); ?></td>
	                        <td align="center"><?php echo $equipo->getPE(); ?></td>
	                        <td align="center"><?php echo $equipo->getPP(); ?></td>
	                        <td align="center"><?php echo $equipo->getPC(); ?></td>
	                        <td align="center"><?php echo $equipo->getPR(); ?></td>
	                        <td align="center"><?php echo $equipo->getTC(); ?></td>
	                        <td align="center"><?php echo $equipo->getTR(); ?></td>
	                        <td align="center"><?php echo $equipo->getPB(); ?></td>
	                        <td align="center"><?php echo $equipo->getPTS(); ?></td>
                    	</tr>
		         	<?php
                    }
                    ?>
            </table>
  		</div>
  		<em><strong>PJ = Partidos Jugados, PG = Partidos Ganados, PE = Partidos Empatados, PP = Partidos Perdidos, PC = Puntos Convertidos, PR = Puntos Recibidos, TC = Tries Convertidos, TR = Tries Recibidos, PB = Puntos Bonus, PTS = Puntos.</strong></em>
 	</div>

<?php include("templates/footer_logos.tpl.php"); ?>
<?php include("templates/html_footer.tpl.php"); ?>
<?php require_once("includes/conn_close.php"); ?>