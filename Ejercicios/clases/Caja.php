<?
	class Caja {
		public $saldo;
		public $ventas;
		public $pagos;
		public function __construct(){
			$this->saldo = 200;
			$this->ventas = [];
			$this->pagos = [];
		}
		public function pagar($cantidad,$proveedor) {
			if (in_array($proveedor,array_flip($this->pagos))){
				$this->pagos[$proveedor]+=$cantidad;
			}
			else {
				$this->pagos[$proveedor]=$cantidad;				
			}
			$this->saldo-=$cantidad;
		}
		public function vender($cantidad,$comprador) {
			if (in_array($comprador,array_flip($this->ventas))){
				$this->ventas[$comprador]+=$cantidad;
			}
			else {
				$this->ventas[$comprador]=$cantidad;	
			}
			$this->saldo+=$cantidad;
		}
	}
?>