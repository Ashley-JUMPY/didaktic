<?php
	class compteur {
		private $fp;
		private $nbr;

		public function __construct(){
			$this->fp = fopen("compteur.txt", "r+");
			$this->nbr = fgets($this->fp);
			$this->inc();
		}

		public function _destruct(){
			fclose($this->fp);
		}

		public function inc(){
			if(@$_SESSION['dejaVisitee'] != "oui"){
				$this->nbr++;
				fseek($this->fp, 0);
				fputs($this->fp, $this->nbr);
				$_SESSION['dejaVisitee'] = "oui";
			}
		}

		public function afficher(){
			return $this->nbr;
		}
	}
?>