<?PHP
include "../configA.php";
class événementsC {
function afficherEvenement ($evenements){
		echo "id_event: ".$evenements->getid_event()."<br>";
		echo "title: ".$evenements->gettitle()."<br>";
		echo "periode: ".$evenements->getpériode()."<br>";
		echo "description: ".$evenements->getdescription()."<br>";
		echo "adresse: ".$evenements->getadresse()."<br>";
	}
	
	function ajouterevenement($événements){
		$sql="insert into événements (id_event,title,periode,description,adresse) values 
(:id_event, :title,:periode,:description,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_event=$evenements->getid_event();
        $title=$evenements->gettitle();
        $période=$evenements->getpériode();
        $description=$evenements->getdescription();
        $adresse=$evenements->getadresse();
        //lier variable => paramètre
        $req->bindValue(':id_event',$id_event);
		$req->bindValue(':title',$title);
		$req->bindValue(':periode',$période);
		$req->bindValue(':description',$description);
		$req->bindValue(':adresse',$adresse);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
/*	function afficherEvenement(){
		$sql="SElECT * From evenements";
		$db = configA::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	} */
	function supprimerevenement($id_event){
		$sql="DELETE FROM evenements where id_event= :id_event";
		$db = configA::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_event',$id_event);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEvenement($evenements,$id_event){
		$sql="UPDATE evenements SET id_event=:id_event, title=:title,periode=:periode,description=:description,adresse=:adresse WHERE id_event=:id_event";
		$db = configA::getConnexion();
try{

        $req=$db->prepare($sql);
		$id_event=$evenements->getid_event();
        $title=$evenements->gettitle();
        $période=$evenements->getpériode();
        $description=$evenements->getdescription();
        $adresse=$evenements->getadresse();
		$datas = array(':id_event'=>$id_event, ':id_event'=>$id_event, ':title'=>$title,':periode'=>$période,':description'=>$description,':adresse'=>$adresse);
		//lier variable => paramètre
		$req->bindValue(':id_event',$id_event);
		$req->bindValue(':id_event',$id_event);
		$req->bindValue(':title',$title);
		$req->bindValue(':periode',$période);
		$req->bindValue(':description',$description);
		$req->bindValue(':adresse',$adresse);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEvenement($id_event){
		$sql="SELECT * from evenements where evenements=$evenements";
		$db = configA::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListeEvenement($title){
		$sql="SELECT * from evenements where title=$title";
		$db = configA::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>
    