<?PHP
include "C:\wamp\www\WEBProjet\commercialisation\back\evenement.php";
include "C:\wamp\www\WEBProjet\commercialisation\back\evenementC.php";

$evenementC=new evenementC();
if (isset($_POST["id_event"])){
	$evenementC->supprimerevenement($_POST["id_event"]);
	header('Location: afficherEmploye.php');
	//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$evenement1C=new evenementC();
$evenement1C->supprimerevenement($evenement1);
//header('Location: afficherEmploye.php');
	
}else{
	echo "vérifier les champs";
}
//*/

}

?>