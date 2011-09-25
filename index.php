<?php session_start(); ?>
<?php require_once("includes/ini.php"); ?>
<?php require_once("classes/equipo.class.php"); ?>
<?php require_once("classes/estadio.class.php"); ?>
<?php require_once("classes/puntos_usuario.class.php"); ?>
<?php
	if(isset($_GET["res"])){
		if($_GET["res"] == 0){
			$_SESSION["url_back"] = "index.php";
			$_SESSION["param_back"] = "res";
			header("Location: log_in.php");
			exit();
		}else{
			
			//Veo si el usuario esta activo
			$sql_usuario ="SELECT * FROM usuarios WHERE id = ".$_GET["res"].";";
			$rsUsuario = mysql_query($sql_usuario, $conn) or die(mysql_error());
			$rowUsuario = mysql_fetch_assoc($rsUsuario);
			
			
			if($rowUsuario["activo"] == 0){
				header("Location: resultados_usuario.php");
				exit();	
			}else{
				//cargo partidos del usuario
				$sql_partidosA = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.grupo = 'A' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
				$sql_partidosB = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.grupo = 'B' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
				$sql_partidosC = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.grupo = 'C' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
				$sql_partidosD = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.grupo = 'D' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
				$sql_partidoCF1 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = 41 AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido";
				$sql_partidoCF2 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = 42 AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido";
				$sql_partidoCF3 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = 43 AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido";
				$sql_partidoCF4 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = 44 AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido";
				$sql_partidoSF1 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = 45 AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido";
				$sql_partidoSF2 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = 46 AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido";
				$sql_partidoTERCER = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = 47 AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido";
				$sql_partidoFINAL = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario as equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante as equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = 48 AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido";
			}
		}
	}else{
		$sql_partidosA = "SELECT * FROM partidos WHERE grupo = 'A' ORDER BY fecha ASC";
		$sql_partidosB = "SELECT * FROM partidos WHERE grupo = 'B' ORDER BY fecha ASC";
		$sql_partidosC = "SELECT * FROM partidos WHERE grupo = 'C' ORDER BY fecha ASC";
		$sql_partidosD = "SELECT * FROM partidos WHERE grupo = 'D' ORDER BY fecha ASC";
		$sql_partidoCF1 = "SELECT * FROM partidos WHERE id = 41";
		$sql_partidoCF2 = "SELECT * FROM partidos WHERE id = 42";
		$sql_partidoCF3 = "SELECT * FROM partidos WHERE id = 43";
		$sql_partidoCF4 = "SELECT * FROM partidos WHERE id = 44";
		$sql_partidoSF1 = "SELECT * FROM partidos WHERE id = 45";
		$sql_partidoSF2 = "SELECT * FROM partidos WHERE id = 46";
		$sql_partidoTERCER = "SELECT * FROM partidos WHERE id = 47";
		$sql_partidoFINAL = "SELECT * FROM partidos WHERE id = 48";
	}
	$rsPartidosA = mysql_query($sql_partidosA,$conn) or die(mysql_error());
	$rsPartidosB = mysql_query($sql_partidosB,$conn) or die(mysql_error());
	$rsPartidosC = mysql_query($sql_partidosC,$conn) or die(mysql_error());
	$rsPartidosD = mysql_query($sql_partidosD,$conn) or die(mysql_error());
	$rsPartidoCF1 = mysql_query($sql_partidoCF1,$conn) or die(mysql_error());
	$rsPartidoCF2 = mysql_query($sql_partidoCF2,$conn) or die(mysql_error());
	$rsPartidoCF3 = mysql_query($sql_partidoCF3,$conn) or die(mysql_error());
	$rsPartidoCF4 = mysql_query($sql_partidoCF4,$conn) or die(mysql_error());
	$rsPartidoSF1 = mysql_query($sql_partidoSF1,$conn) or die(mysql_error());
	$rsPartidoSF2 = mysql_query($sql_partidoSF2,$conn) or die(mysql_error());
	$rsPartidoTERCER = mysql_query($sql_partidoTERCER,$conn) or die(mysql_error());
	$rsPartidoFINAL = mysql_query($sql_partidoFINAL,$conn) or die(mysql_error());
?>

<?php require_once("includes/conversion.php"); ?>

<?php include("templates/html_head.tpl.php"); ?>
<?php include("templates/menu.tpl.php"); ?>

<?php
	if(isset($_SESSION["log_message"])){
		echo "<div id='mensaje'>".$_SESSION["log_message"]."</div>";
		unset($_SESSION["log_message"]);
	}
?>

<?php include("templates/fixture.tpl.php"); ?>

<?php include("templates/footer_logos.tpl.php"); ?>
<?php include("templates/html_footer.tpl.php"); ?>
<?php require_once("includes/conn_close.php"); ?>