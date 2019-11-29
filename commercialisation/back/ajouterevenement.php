<?PHP
include "C:\wamp\www\WEBProjet\commercialisation\back\evenement.php";
include "C:\wamp\www\WEBProjet\commercialisation\back\evenementC.php";


if (isset($_POST['title']) and isset($_POST['periode']) and isset($_POST['adresse']) and isset($_POST['description'])){
$evenement1=new evenement($_POST['title'],$_POST['periode'],$_POST['adresse'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$evenement1C=new evenementC();
$evenement1C->ajouterevenement($evenement1);
//header('Location: afficherEmploye.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>