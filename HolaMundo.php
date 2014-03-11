<?PHP

class mundo{
	public $Imprime="Hola Mundo";
	function Habla(){
		echo $this->Imprime;
	}
}

$ObjImp=new mundo;
$ObjImp->Habla();

?>