<html>
<body>


<?php 
	include 'classes/user.php';
	include 'lib/Database.php';
	
	$user = new user($_POST['nom'], $_POST['email'], $_POST['tel'], $_POST['pass'], $_POST['adresse']);
	
	$nom = $user->getNom();
	$tel = $user->getTel();
	$Email = $user->getEmail();
	$adresse = $user->getAdresse();
	$pass = $user->getMotPasse();
	?>
		<h1> <?php  echo $nom  ?></h1>
<?php 
		
		$db = new Database("localhost", "carnet", "root", "");
		
		$res = $db->inscription("user",$nom,$Email,$tel,$adresse,$pass);
		$db->InscrLoginn($Email,$pass);
		
		
		
		header("location: Index.php");
?>

</body>
</html>