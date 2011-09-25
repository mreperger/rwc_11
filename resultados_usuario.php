<?php @session_start(); ?>
<?php require_once("includes/ini.php"); ?>
<?php require_once("classes/equipo.class.php"); ?>
<?php require_once("classes/estadio.class.php"); ?>
<?php if(!isset($_SESSION["id_usuario"])){
			$_SESSION["url_back"] = "resultados_usuario.php";
			$_SESSION["log_message"] = "Debe ingresar para ingresar sus resultados";
			header("Location: log_in.php");
			exit();
	  }else{
	  	if($_SESSION["activo"] == 1){
	  		$_SESSION["log_message"] = "Usted ya ingrs&oacute; sus resultados";
	  		header("Location: index.php");
			exit();
	  	}
	  }
?>
<?php

	if(isset($_POST["btn_resultado_usuario"])){
		$error = 0;
		
		for($i=1;$i<=8;$i++){
			$resultados[$i]["id_partido"] = $_POST["id_partido_".$i];
			$resultados[$i]["id_equipo_locatario"] = $_POST["id_equipo_locatario_".$i];
			$resultados[$i]["puntos_equipo_locatario"] = $_POST["puntos_equipo_locatario_".$i];
			$resultados[$i]["id_equipo_visitante"] = $_POST["id_equipo_visitante_".$i];
			$resultados[$i]["puntos_equipo_visitante"] = $_POST["puntos_equipo_visitante_".$i];
			
			if($resultados[$i]["id_partido"] <= 0 || $resultados[$i]["id_equipo_locatario"] <= 0 || $resultados[$i]["puntos_equipo_locatario"] < 0 || $resultados[$i]["id_equipo_visitante"] <= 0 || $resultados[$i]["puntos_equipo_visitante"] < 0 || !is_numeric($resultados[$i]["puntos_equipo_visitante"]) || !is_numeric($resultados[$i]["puntos_equipo_locatario"])){
				$error = 1;
				$msg_err = "Ha ocurrido un error. Verifique los datos y vuelva a intentarlo.";
			}
		}
		$id_usuario_post = $_SESSION["id_usuario"];
		
		if($error == 0){
			for($i=1;$i<=8;$i++){
				$sql = "INSERT INTO `partidos_usuarios` (`id`, `id_usuario`, `id_partido`, `id_equipo_locatario`, `puntos_equipo_locatario`, `id_equipo_visitante`, `puntos_equipo_visitante`) " .
				" VALUES (NULL, '".$id_usuario_post."', '".$resultados[$i]["id_partido"]."', '".$resultados[$i]["id_equipo_locatario"]."', '".$resultados[$i]["puntos_equipo_locatario"]."', '".$resultados[$i]["id_equipo_visitante"]."', '".$resultados[$i]["puntos_equipo_visitante"]."');";
				mysql_query($sql,$conn) or die("Error al insertar");
			}
			//Activo usuario
			$sql_update = "UPDATE usuarios SET activo = '1' WHERE id = '".$id_usuario_post."'";
			mysql_query($sql_update, $conn) or die("Error al actualizar");
			
			header("Location: index.php?res=".$id_usuario_post);
				
		}
	}

	if(isset($_GET["res"])){
		if($_GET["res"] == 0){
			$_SESSION["url_back"] = "index.php";
			$_SESSION["param_back"] = "res";
			header("Location: log_in.php");
			exit();
		}else{
			//cargo partidos del usuario
			$sql_partidosA = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.grupo = 'A' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidosB = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.grupo = 'B' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidosC = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.grupo = 'C' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidosD = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.grupo = 'D' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidoCF1 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = '41' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidoCF2 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = '42' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidoCF3 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = '43' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidoCF4 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = '44' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidoSF1 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = '45' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidoSF2 = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = '46' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidoTERCER = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = '47' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
			$sql_partidoFINAL = "SELECT P.fecha, P.grupo, P.id_estadio, P.estado_partido, P.id, U.id_equipo_locatario, U.puntos_equipo_locatario, U.id_equipo_visitante, U.puntos_equipo_visitante FROM partidos as P, partidos_usuarios as U WHERE P.id = '48' AND U.id_usuario = ".$_GET["res"]." AND P.id = U.id_partido ORDER BY P.fecha ASC";
		}
	}else{
		//cargo partidos genericos
        $sql_partidosA = "SELECT * FROM partidos WHERE grupo = 'A' ORDER BY fecha ASC";
		$sql_partidosB = "SELECT * FROM partidos WHERE grupo = 'B' ORDER BY fecha ASC";
		$sql_partidosC = "SELECT * FROM partidos WHERE grupo = 'C' ORDER BY fecha ASC";
		$sql_partidosD = "SELECT * FROM partidos WHERE grupo = 'D' ORDER BY fecha ASC";
		$sql_partidoCF1 = "SELECT * FROM partidos WHERE id = '41'";
		$sql_partidoCF2 = "SELECT * FROM partidos WHERE id = '42'";
		$sql_partidoCF3 = "SELECT * FROM partidos WHERE id = '43'";
		$sql_partidoCF4 = "SELECT * FROM partidos WHERE id = '44'";
		$sql_partidoSF1 = "SELECT * FROM partidos WHERE id = '45'";
		$sql_partidoSF2 = "SELECT * FROM partidos WHERE id = '46'";
		$sql_partidoTERCER = "SELECT * FROM partidos WHERE id = '47'";
		$sql_partidoFINAL = "SELECT * FROM partidos WHERE id = '48'";
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
	$rowPartidoSF1 = mysql_fetch_assoc($rsPartidoSF1) or die(mysql_error());
	
	$rsPartidoSF2 = mysql_query($sql_partidoSF2,$conn) or die(mysql_error());
	$rowPartidoSF2 = mysql_fetch_assoc($rsPartidoSF2) or die(mysql_error());
	
	$rsPartidoTERCER = mysql_query($sql_partidoTERCER,$conn) or die(mysql_error());
	$rowPartidoTERCER = mysql_fetch_assoc($rsPartidoTERCER) or die(mysql_error());
	
	$rsPartidoFINAL = mysql_query($sql_partidoFINAL,$conn) or die(mysql_error());
	$rowPartidoFINAL = mysql_fetch_assoc($rsPartidoFINAL) or die(mysql_error());
?>
<?php require_once("includes/conversion.php"); ?>
<?php include("templates/html_head.tpl.php"); ?>
<?php include("templates/menu.tpl.php"); ?>

<?php include("templates/mis_partidos_fase_final.tpl.php"); ?>

<?php include("templates/footer_logos.tpl.php"); ?>
<?php include("templates/html_footer.tpl.php"); ?>
<?php require_once("includes/conn_close.php"); ?>