<?
	class Cartera {
		protected $saldo;
		public function __construct($saldo){
			$this->saldo = $saldo;
		}
		public function getSaldo(){
			return $this->saldo;
		}
		public function setSaldo($saldo){
			$this->saldo = $saldo;
		}
	}
	class Bolsillo extends Cartera {
		public function __construct($saldo){
			parent::__construct($saldo);
		}
	}
	
?>