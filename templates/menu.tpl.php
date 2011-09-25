<?php
	
	if(isset($_SESSION["id_usuario"])){
		$cod_usuario_fixture = $_SESSION["id_usuario"];
	}else{
		$cod_usuario_fixture = 0;
	}
?>

<div id="zona_cabezal">
	<?php if(isset($_SESSION["id_usuario"])){ ?><a href="logout.php" class="small_menu"><?php echo strtoupper($usuario_global->getNombre()); ?> [CERRAR SESI&Oacute;N]</a><?php } ?>
	<?php if(isset($_SESSION["id_usuario"]) && $_SESSION["tipo"] == 1){ ?><a href="fixture_admin.php" class="small_menu"> ACUTALIZAR RESULTADOS </a><?php } ?>
</div>
<div id="menu">
	<div class="border_left"><img src="img/menu_left.gif"></div>
		<div class="links">
			<a href="index.php">FIXTURE</a>
			<a href="clasificacion_grupos.php">GRUPOS</a>
			<a href="index.php?res=<?php echo $cod_usuario_fixture;  ?>">MIS PARTIDOS</a>
			<a href="trans.php">REGLAS</a>
			<a href="ranking.php">RANKING</a>
		</div>
	<div class="border_right"><img src="img/menu_right.gif"></div>
</div>