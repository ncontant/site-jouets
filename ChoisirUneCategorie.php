<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <?php
 include ('Connexion.php');
 
?>

  <p>Choix d'une catégorie<BR/>
<?php
//Affichage simple de l'ensemble des catégories
$listeCategorie = $connexion->query("SELECT * FROM categorie order by 2"); 


while( $row=$listeCategorie->fetch(PDO::FETCH_ASSOC) )       
{
	$IdCat = $row['id_cat'];
       $LibCat =  $row['lib_cat'];
       echo "$IdCat. $LibCat..<BR/>";			
}
?>


<!- Saisie du code catégorie souhaité et envoie à la page AfficheProduits1Categ -->
<!-Mise en place d’un formulaire avec une zone de saisie pour le code  -->

<FORM  action = 'AfficheProduits1Categorie.php' method = 'get'>

       

Entrer le code catégorie </p>  <input type ="text" NAME = "TIdCat" SIZE = "2"> 
<input type ='submit' value = 'Voir les produits associés'>

</FORM>

<p><H3> <A  href="index.php">Retour Page d'accueil</A></H3></P>

</HTML> 
