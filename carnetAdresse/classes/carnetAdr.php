<?php
class carnetAdr{
	private $nom;
	private $adresse;
	private $tel;
		
	function carnetAdr($nom, $tel, $adresse){
		$this->nom = $nom;
		$this->tel = $tel;
		$this->adresse = $adresse;
		}

	public function getNom(){
		return $this->nom;
	}
	public function setNom($name){
		$this->nom = $name;
	}
	
	public function getTel(){
		return $this->tel;
	}
	public function setTel($tele){
		$this->tel = $tele;
	}
	
	public function getAdresse(){
		return $this->adresse;
	}
	public function setAdress($adress){
		$this->adresse = $adress;
	}
	
	function toHTML(){
		return 
			"<tr><td>" . $this->nom . "</td>"
			. "<td>" . $this->tel . "</td>"
			. "<td>" . $this->adresse . "</td></tr>";
	}
}
?>