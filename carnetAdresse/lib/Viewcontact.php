<?php
class View{
	
public static function table($req){
	echo "<html>";
	echo "<body>";
	$rs = $req;
	echo "<table style='margin-left: 350px;margin-top: 150px;' border=solid>";
	foreach ($rs as $k){
				
				echo "<tr style='margin-left: 150px;'>";
					echo "<td><span>" .$k['nom'] . "</span></td>";
					echo "<td><span>" . $k['adresse']. "</span></td>";
					echo "<td><span>" . $k['tel']. "</span></td>";
				echo "</tr>";
				
	}	
	echo "</table>";
	echo "</div>";
	echo "</html>";
	echo "</body>";
	}
}
?>
