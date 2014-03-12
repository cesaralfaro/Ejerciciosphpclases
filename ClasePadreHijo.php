<?PHP

class Padre{
	public $nombre="Esteban";
	private $altura="175";
	protected $edad="57";
}

class Hijo extends Padre{
	public $nombrehijo="Cesar";
	private $alturahijo="180";
	protected $edadhijo="25";

	function ImprimePadre(){
		echo $this->nombre."<br>";
		echo $this->altura."<br>"; //Como es private no puedo llamarlo desde el hijo
		echo $this->edad."<br>";
	}

	function ImprimeHijo(){
		echo $this->nombrehijo."<br>";
		echo $this->alturahijo."<br>";
		echo $this->edadhijo."<br>";
	}
}

$objYo=new Hijo();
$objYo->ImprimePadre();
$objYo->ImprimeHijo();

?>