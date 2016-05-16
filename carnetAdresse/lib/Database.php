<?php
class Database{
	private $host;
	private $source;
	private $user;
	private $password;
	private $url;

	private $db;
		
	function Database($host,$source,$user,$password){
		$this->host = $host;
		$this->password = $password;
		$this->user = $user;
		$this->source = $source;

		$this->url = "mysql:host=$host;dbname=$source";
		try {
			$this->db = new PDO($this->url, $this->user, $password);
		} catch (PDOException $e) {
			echo "Erreur de Connexion : " . $e->getMessage();
		}
		}
	
	public function loginn($name,$passw){
		$rs=$this->db->query("select * from login where Email='".$name."'and pwd='".$passw."'");
		return $rs;
	}	

	public function InscrLoginn($Email,$pass){
		$res = "insert into login(login,password) values('" . $Email . "'" . ", '" . $pass ."')" ;
		$rs = $this->db->query($res);		
		return $rs;
	}	
	
	public function inscription($tablename, $nom, $Email, $tel,$adresse, $password){
		$req = "insert into $tablename(nom,email,tel,motPasse,adresse) values('" . $nom . "'" 
				. ", '" . $Email ."'" 
				. ", '" . $tel ."'" 
				. ", '" . $password ."'" 
				. ", '" . $adresse ."')";
		$res = $this->db->query($req);
		
		return $res;
	}
	
	public function addContact($tablename, $tel, $adresse, $nom){
			$req = "insert into $tablename(tel,adresse,nom) values('" . $tel . "'" 
					. ", '" . $adresse ."'" 
					. ", '" . $nom ."')";
			$res = $this->db->query($req);
			
			return $res;
		}
	
	public function AfficherContact($tablename){
		$req = "select tel, nom, adresse from $tablename";
		$res = $this->db->query($req);
		return $res;
	}
	
		
	public function supprimerContact($tablename, $nom){
		$req = "delete from $tablename where nom='" . $nom . "'";
		$res = $this->db->query($req);
		return $res;
	}
	
	public function chercher($tableName, $name){
		$rs=$this->db->query("select * from $tableName where nom='" . $name . "'");
		return $rs;
	}	
	
}
?>