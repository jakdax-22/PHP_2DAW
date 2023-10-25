<?
	class Menu {
	public $direcciones;
	public function __construct(){
		$this->direcciones=[];
	}
	public function introducir($direccion){
		array_push($this->direcciones,$direccion);
	}
}
?>