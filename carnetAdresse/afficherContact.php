<?php 		
		include 'lib/Database.php';
		include 'lib/Viewcontact.php';
		
		$db = new Database("localhost", "carnet", "root", "");
		$req = $db->AfficherContact("carnetadresse");
		
		$d = new View();
		$d->table($req);
?>