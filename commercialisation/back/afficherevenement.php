<?PHP
include "C:\wamp\www\WEBProjet\commercialisation\back\evenement.php";
include "C:\wamp\www\WEBProjet\commercialisation\back\evenementC.php";
$employe1C=new evenementsC();
$listeevenements=$evenements1C->afficherevenement();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
    <tr>
        <td>id_event</td>
        <td>title</td>
        <td>periode</td>
        <td>description</td>
        <td>adresse</td>
        <td>supprimer</td>
        <td>modifier</td>
    </tr>

    <?PHP
    foreach($listeevenements as $row){
        ?>
        <tr>
            <td><?PHP echo $row['id_event']; ?></td>
            <td><?PHP echo $row['title']; ?></td>
            <td><?PHP echo $row['periode']; ?></td>
            <td><?PHP echo $row['description']; ?></td>
            <td><?PHP echo $row['adresse']; ?></td>
            <td><form method="POST" action="supprimerevenement.php">
                    <input type="submit" name="supprimer" value="supprimer">
                    <input type="hidden" value="<?PHP echo $row['id_event']; ?>" name="id_event">
                </form>
            </td>
            <td><a href="modifierevenement.php?id_event=<?PHP echo $row['id_event']; ?>">
                    Modifier</a></td>
        </tr>
        <?PHP
    }
    ?>
</table>

