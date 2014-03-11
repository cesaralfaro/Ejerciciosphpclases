<?PHP

class ticket{
	public $total=0;
	public $pagado=false;
	public $pufo=0;

	function Suma($cantidad){
		$this->total=number_format($this->total+$cantidad,2);
		$this->pufo=number_format($this->pufo+$cantidad,2);
	}
	function Imprimir(){
		echo "Total acumulado: $this->total<br>";
		if($this->pagado){
			echo "Pagado: SI<br>";
		}
		else{
			echo "Pagado: NO, faltan $this->pufo<br>";
		}
	}
	
	function Pagar($cantidad){
		$this->pufo=number_format($this->pufo-$cantidad,2);
		if($this->pufo==0){
			$this->pagado=true;
		}
	}

	function Restar($cantidad){
		$this->total=number_format($this->total-$cantidad,2);
		$this->pufo=number_format($this->pufo-$cantidad,2);
	}
}

$objTick=new ticket;
$objTick->Suma(20);
$objTick->Suma(32);
$objTick->Imprimir();
$objTick->Suma(21.20);
$objTick->Imprimir();
$objTick->Restar(32);
$objTick->Pagar(40);
$objTick->Imprimir();
$objTick->Pagar(1.2);
$objTick->Imprimir();

?>