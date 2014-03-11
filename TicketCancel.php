<?PHP

class ticket{
	public $total=0;
	public $pagado=false;

	function Suma($cantidad){
		$this->total=$this->total+$cantidad;
	}
	function Imprimir(){
		echo "Total acumulado: $this->total<br>";
		if($this->pagado){
			echo "Pagado: SI<br>";
		}
		else{
			echo "Pagado: NO<br>";
		}
	}
	
	function Pagar(){
		$this->pagado=true;
	}
}

$objTick=new ticket;
$objTick->Suma(20);
$objTick->Suma(32);
$objTick->Imprimir();
$objTick->Suma(21.20);
$objTick->Imprimir();
$objTick->Pagar();
$objTick->Imprimir();

?>