<?php
	
		include 'lib/Database.php';
		include 'lib/Viewcontact.php';
		
		$db = new Database("localhost", "carnet", "root", "");
		$req = $db->supprimerContact("carnetadresse", $_POST['nom']);
		
		echo "element supprimer";
?>