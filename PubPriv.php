<?PHP

class claseAmbito{
	public $nombre="Cesar";
	private $sexo="Varon";
	protected $edad="25";
}

$objYo=new claseAmbito;
echo $objYo->nombre;
echo $objYo->sexo; //No puedo acceder
echo $objYo->edad; //No puedo acceder

?>