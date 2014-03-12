<?PHP

class claseAmbito{
	public $nombre="Cesar";
	private $sexo="Varon";
	protected $edad="25";

	function Imprimir(){
		echo $this->nombre;
		echo $this->sexo;
		echo $this->edad;
	}
}

$objYo=new claseAmbito;
$objYo->Imprimir();

?>