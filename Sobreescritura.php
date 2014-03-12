<?PHP

class Padre{
	public $nombre="Esteban";
	private $altura="175";
	protected $edad="57";

	function Imprime(){
		echo $this->nombre."<br>";
		echo $this->altura."<br>"; 
		echo $this->edad."<br>";
	}
}

class Hijo1 extends Padre{
	public $nombre="Cesar";
	private $altura="180";
	protected $edad="25";

	function Imprime(){
		echo $this->nombre."<br>"; 
		echo $this->altura."<br>"; 
		echo $this->edad."<br>";
	}

	function ImprimePadre(){
		parent::Imprime(); //Para las varables que no son de tipo private, me toma las de Hijo1
	}
}

class Hijo2 extends Padre{
	public $nombre="Luis";
	private $altura="197";
	protected $edad="30";

	function Imprime(){
		echo $this->nombre."<br>"; 
		echo $this->altura."<br>"; 
		echo $this->edad."<br>";
	}
}

class Hijo3 extends Padre{
	public $nombre="Pedro";
	private $altura="169";
	protected $edad="21";	

	function Imprime(){
		echo $this->nombre."<br>"; 
		echo $this->altura."<br>"; 
		echo $this->edad."<br>";
	}

	function Imprimedos(){
		self::Imprime();
		self::Imprime();
	}
}

$objYo1=new Hijo1();
$objYo2=new Hijo2();
$objYo3=new Hijo3();
$objYo1->Imprime();
$objYo1->ImprimePadre();
$objYo2->Imprime();
echo $objYo2->nombre."<br>";
$objYo3->Imprimedos();

?>