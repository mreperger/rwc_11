<?php

	require_once(dirname(__FILE__)."/equipo.class.php");
	
	class Grupo{
		
		private $equipos=null;
		
		public function Grupo($cod_grupo, $conn){
			
			$equipos = Array();
			
			$sql_equipos = "SELECT * FROM equipos WHERE grupo = '".$cod_grupo."';";
			$rsEquipos = mysql_query($sql_equipos, $conn);
			while($rowEquipos = mysql_fetch_assoc($rsEquipos)){
				$equipo = new Equipo($rowEquipos["id"],$conn);
				$equipo->calcResultados($conn);
				$this->equipos[] = $equipo;
			}
			
			//Ordeno array segun reglas de puntos
			$this->ordenarGrupo();
		}
		
		private function ordenarGrupo(){
			//Ordeno por pts (mayor a menor)
			$this->ordenarGrupoPTS();
			//Ordeno por tc (mayor a menor)
			$this->ordenarGrupoTC();
			//Ordeno por tr (menor a mayor)
			$this->ordenarGrupoTR();
			//Ordeno por nombre (menor a mayor)
			$this->ordenarGrupoNOMBRE();
		}
		
		private function ordenarGrupoPTS(){
			$n = count($this->equipos);
			do{
				$newn = 0;
				for($i = 0; $i < $n-1; $i++){
					$equipo1 = $this->equipos[$i];
					$equipo2 = $this->equipos[$i+1];
					if($equipo1->getPTS() < $equipo2->getPTS()){
						//CAMBIO POS
						$this->equipos[$i] = $equipo2;
						$this->equipos[$i + 1] = $equipo1;
						$newn = $i + 1;
					}
				}
				$n = $newn;
			}while($n > 1);
		}
		
		private function ordenarGrupoTC(){
			$n = count($this->equipos);
			do{
				$newn = 0;
				for($i = 0; $i < $n-1; $i++){
					$equipo1 = $this->equipos[$i];
					$equipo2 = $this->equipos[$i+1];
					if($equipo1->getPTS() == $equipo2->getPTS() && $equipo1->getTC() < $equipo2->getTC()){
						//CAMBIO POS
						$this->equipos[$i] = $equipo2;
						$this->equipos[$i + 1] = $equipo1;
						$newn = $i + 1;
					}
				}
				$n = $newn;
			}while($n > 1);
		}
		
		private function ordenarGrupoTR(){
			$n = count($this->equipos);
			do{
				$newn = 0;
				for($i = 0; $i < $n-1; $i++){
					$equipo1 = $this->equipos[$i];
					$equipo2 = $this->equipos[$i+1];
					if($equipo1->getPTS() == $equipo2->getPTS() && $equipo1->getTC() == $equipo2->getTC() && $equipo1->getTR() > $equipo2->getTR()){
						//CAMBIO POS
						$this->equipos[$i] = $equipo2;
						$this->equipos[$i + 1] = $equipo1;
						$newn = $i + 1;
					}
				}
				$n = $newn;
			}while($n > 1);
		}
		
		private function ordenarGrupoNOMBRE(){
			$n = count($this->equipos);
			do{
				$newn = 0;
				for($i = 0; $i < $n-1; $i++){
					$equipo1 = $this->equipos[$i];
					$equipo2 = $this->equipos[$i+1];
					if($equipo1->getPTS() == $equipo2->getPTS() && $equipo1->getTC() == $equipo2->getTC() && $equipo1->getTR() == $equipo2->getTR && $equipo1->getNombre() > $equipo2->getNombre()){
						//CAMBIO POS
						$this->equipos[$i] = $equipo2;
						$this->equipos[$i + 1] = $equipo1;
						$newn = $i + 1;
					}
				}
				$n = $newn;
			}while($n > 1);
		}
		
		public function getEquipos(){
			return $this->equipos;
		}
	}
	
?>