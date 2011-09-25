<?php
	class Equipo{
		
		private $id = null;
		private $nombre = null;
		private $grupo = null;
		private $estado_clasificacion = null;
		
		private $pj=null;
		private $pg=null;
		private $pe=null;
		private $pp=null;
		private $pc=null;
		private $pr=null;
		private $tc=null;
		private $tr=null;
		private $pb=null;
		private $pts=null;
		
		public function Equipo($id, $conn){
			$sql_equipo = "SELECT * FROM equipos WHERE id = '$id';";
			$rsEquipo = mysql_query($sql_equipo, $conn);
			if($rowEquipo = mysql_fetch_assoc($rsEquipo)){
				//cargo datos en el equipo
				$this->id = $rowEquipo["id"];
				$this->nombre = $rowEquipo["nombre"];
				$this->grupo = $rowEquipo["grupo"];
				$this->estado_clasificacion = $rowEquipo["estado_clasificacion"];
			}
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function getGrupo(){
			return $this->grupo;
		}
		
		public function getEstadoClasificacion(){
			return $this->estado_clasificacion;
		}
		
		public function calcResultados($conn){
			//Calcular partidos ganados, partidos perdidos, etc
			$this->calcPJ($conn);
			$this->calcPG($conn);
			$this->calcPE($conn);
			$this->calcPP($conn);
			$this->calcPC($conn);
			$this->calcPR($conn);
			$this->calcTC($conn);
			$this->calcTR($conn);
			$this->calcPB($conn);
			$this->calcPTS($conn);
		}
		
		private function calcPJ($conn){
			$sql_pj = "SELECT * FROM partidos WHERE (equipo_locatario = ".$this->id." OR equipo_visitante = ".$this->id.") AND estado_partido = 1;";
			$rsPJ = mysql_query($sql_pj, $conn) or die(mysql_error());
			$num_rowsPJ = mysql_num_rows($rsPJ);
			if($num_rowsPJ){
				$this->pj = $num_rowsPJ;
			}else{
				$this->pj = 0;
			}
		}
		
		private function calcPG($conn){
			$sql_pg = "SELECT * FROM partidos WHERE (equipo_locatario = ".$this->id." AND puntos_equipo_locatario > puntos_equipo_visitante AND estado_partido = 1) OR (equipo_visitante =".$this->id." AND puntos_equipo_visitante > puntos_equipo_locatario AND estado_partido = 1);";
			$rsPG = mysql_query($sql_pg, $conn) or die(mysql_error());
			$num_rowsPG = mysql_num_rows($rsPG);
			if($num_rowsPG){
				$this->pg = $num_rowsPG;
			}else{
				$this->pg = 0;
			}
		}
		
		private function calcPE($conn){
			$sql_pe = "SELECT * FROM partidos WHERE (equipo_locatario = ".$this->id." OR equipo_visitante = ".$this->id.") AND (puntos_equipo_locatario = puntos_equipo_visitante) AND (estado_partido = 1);";
			$rsPE = mysql_query($sql_pe, $conn) or die(mysql_error());
			$num_rowsPE = mysql_num_rows($rsPE);
			if($num_rowsPE){
				$this->pe = $num_rowsPE;
			}else{
				$this->pe = 0;
			}
		}
		
		private function calcPP($conn){
			$sql_pp = "SELECT * FROM partidos WHERE (equipo_locatario = ".$this->id." AND puntos_equipo_locatario < puntos_equipo_visitante AND estado_partido = 1) OR (equipo_visitante =".$this->id." AND puntos_equipo_visitante < puntos_equipo_locatario AND estado_partido = 1)";
			$rsPP = mysql_query($sql_pp, $conn) or die(mysql_error());
			$num_rowsPP = mysql_num_rows($rsPP);
			if($num_rowsPP){
				$this->pp = $num_rowsPP;
			}else{
				$this->pp = 0;
			}
		}
		
		private function calcPC($conn){
			$sql_pc = "(SELECT * FROM partidos WHERE (equipo_locatario = ".$this->id." OR equipo_visitante = ".$this->id.") AND estado_partido = 1);";
			$rsPC = mysql_query($sql_pc, $conn) or die(mysql_error());
			$total = 0;
			while($row_PC = mysql_fetch_array($rsPC)){
				if($row_PC["equipo_locatario"] == $this->id){
					$total = $total + $row_PC["puntos_equipo_locatario"];
				}elseif($row_GC["equipo_visitante"] == $this->id){
					$total = $total + $row_PC["puntos_equipo_visitante"];
				}
			}
			if($total){
				$this->pc = $total;
			}else{
				$this->pc = 0;
			}
		}
		
		private function calcPR($conn){
			$sql_pr = "(SELECT * FROM partidos WHERE (equipo_locatario = ".$this->id." OR equipo_visitante = ".$this->id.") AND estado_partido = 1);";
			$rsPR = mysql_query($sql_pr, $conn) or die(mysql_error());
			$total = 0;
			while($row_PR = mysql_fetch_array($rsPR)){
				if($row_PR["equipo_locatario"] == $this->id){
					$total = $total + $row_PR["puntos_equipo_visitante"];
				}elseif($row_PR["equipo_visitante"] == $this->id){
					$total = $total + $row_PR["puntos_equipo_locatario"];
				}
			}
			if($total){
				$this->pr = $total;
			}else{
				$this->pr = 0;
			}
		}
		
		private function calcTC($conn){
			$sql_tc = "(SELECT * FROM partidos WHERE (equipo_locatario = ".$this->id." OR equipo_visitante = ".$this->id.") AND estado_partido = 1);";
			$rsTC = mysql_query($sql_tc, $conn) or die(mysql_error());
			$total = 0;
			while($row_TC = mysql_fetch_array($rsTC)){
				if($row_TC["equipo_locatario"] == $this->id){
					$total = $total + $row_TC["tries_equipo_locatario"];
				}elseif($row_TC["equipo_visitante"] == $this->id){
					$total = $total + $row_TC["tries_equipo_visitante"];
				}
			}
			if($total){
				$this->tc = $total;
			}else{
				$this->tc = 0;
			}
		}
		
		private function calcTR($conn){
			$sql_tr = "(SELECT * FROM partidos WHERE (equipo_locatario = ".$this->id." OR equipo_visitante = ".$this->id.") AND estado_partido = 1);";
			$rsTR = mysql_query($sql_tr, $conn) or die(mysql_error());
			$total = 0;
			while($row_TR = mysql_fetch_array($rsTR)){
				if($row_TR["equipo_locatario"] == $this->id){
					$total = $total + $row_TR["tries_equipo_visitante"];
				}elseif($row_TR["equipo_visitante"] == $this->id){
					$total = $total + $row_TR["tries_equipo_locatario"];
				}
			}
			if($total){
				$this->tr = $total;
			}else{
				$this->tr = 0;
			}
		}
		
		private function calcPB($conn){
			$sql_pb = "(SELECT * FROM partidos WHERE (equipo_locatario = ".$this->id." OR equipo_visitante = ".$this->id.") AND estado_partido = 1);";
			$rsPB = mysql_query($sql_pb, $conn) or die(mysql_error());
			$total = 0;
			while($row_PB = mysql_fetch_array($rsPB)){
				if($row_PB["equipo_locatario"] == $this->id){
					if($row_PB["tries_equipo_locatario"] >= 4){
						$total = $total + 1;
					}
					if($row_PB["puntos_equipo_locatario"] < $row_PB["puntos_equipo_visitante"] && $row_PB["puntos_equipo_visitante"] - $row_PB["puntos_equipo_locatario"] <= 7){
						$total = $total + 1;
					}
				}else{
					if($row_PB["equipo_visitante"] == $this->id){
						if($row_PB["tries_equipo_visitante"] >= 4){
							$total = $total + 1;
						}
						if($row_PB["puntos_equipo_locatario"] > $row_PB["puntos_equipo_visitante"] && $row_PB["puntos_equipo_locatario"] - $row_PB["puntos_equipo_visitante"] <= 7){
						$total = $total + 1;
						}
					}
				}
			}
			if($total){
				$this->pb = $total;
			}else{
				$this->pb = 0;
			}
		}
				
		private function calcPTS($conn){
			$this->pts = $this->pg * 4 + $this->pe * 2 + $this->pb;
		}
		
		public function getPJ(){
			return $this->pj;
		}
		
		public function getPG(){
			return $this->pg;
		}
		
		public function getPE(){
			return $this->pe;
		}
		
		public function getPP(){
			return $this->pp;
		}
		
		public function getPC(){
			return $this->pc;
		}
		
		public function getPR(){
			return $this->pr;
		}
		
		public function getTC(){
			return $this->tc;
		}
		
		public function getTR(){
			return $this->tr;
		}
		
		public function getPB(){
			return $this->pb;
		}
		
		public function getPTS(){
			return $this->pts;
		}
	}
?>