<?php

$Taille = 7;
$char = 'x';

echo "Programme d'affichage suite a des bocules for </br>";

for($i = 1; $i <= $Taille; $i++)
	{
		for($j = 1; $j <= $Taille; $j++)
			 {
			 	if($i+$j == 8 or $i == $j)
			 	{
			 		if($j == 7)
			 		{
			 			echo "$char </br>";
			 		}
			 		else
			 		{
			 			echo $char;
			 		}			 		
			 	}
			 	else
			 	{
			 		if($j == 7)
			 		{
			 			echo "_</br>";
			 		}
			 		else
			 		{
			 			echo "_";
			 		}
			 		
			 	}
			 	
			 }

	}


?>