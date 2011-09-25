<?php session_start(); ?>
<?php require_once("includes/ini.php"); ?>
<?php require_once("classes/equipo.class.php"); ?>
<?php require_once("classes/estadio.class.php"); ?>
<?php
	$sql_usuario = "SELECT * FROM usuarios";
	$rsUsuario = mysql_query($sql_usuario,$conn) or die(mysql_error());
	$rowUsuario = mysql_fetch_assoc($rsUsuario);
	
	if(!isset($_SESSION["id_usuario"])){
		$_SESSION["url_back"] = "fixture_admin.php";
		$_SESSION["log_message"] = "Debe de ingrear usuario";
		header("Location: log_in.php");
		exit();
	}else{
		if($_SESSION["tipo"] != 1){
			$_SESSION["url_back"] = "fixture_admin.php";
			$_SESSION["log_message"] = "Error! Esta intentando ingresar en &aacute;rea restringida";
			header("Location: log_in.php");
			exit();
		}
	}
?>

<?php require_once("includes/conversion.php"); ?>

<?php include("templates/html_head.tpl.php"); ?>
<?php include("templates/menu.tpl.php"); ?>
<?php
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
<?php include("templates/admin.tpl.php"); ?>

<?php include("templates/footer_logos.tpl.php"); ?>
<?php include("templates/html_footer.tpl.php"); ?>
<?php require_once("includes/conn_close.php"); ?>
