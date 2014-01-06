<html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
    
<?php
    include ("Connexion.php");
    $listeCategories=$connexion->query("SELECT id_cat,lib_cat FROM categorie order by lib_cat");
   

    echo '<p><h3> Gestion des catégories</h3> </p>';

   while($categorie = $listeCategories->fetch())
	{	
		echo $categorie[id_cat].'   '.$categorie[lib_cat];
                 
		echo '<br>';
			
	}
?>

</html>