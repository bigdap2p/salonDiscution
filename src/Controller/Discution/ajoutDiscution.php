<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 07/03/2019
 * Time: 22:23
 */

namespace PHPInitiation\Controller\Discution;


class ajoutDiscution
{


        public
        function lectureJson ($nomDuFichier)
        {
            $handle = fopen($nomDuFichier, "r");
            $resultat = fread($handle, filesize($nomDuFichier));
            $finalDiscution = json_decode($resultat);
            fclose($handle);
            return $finalDiscution;
        }

        
        public function ecrireJson ($nomDuFichier,$login,$message){
	   	$nomDuFichier;
        $fichier = fopen($nomDuFichier, 'r+');
        $jesaispas = fread($fichier, filesize($nomDuFichier));  
   		$resultat = json_decode($jesaispas);
   		if ($resultat === null){$resultat = [];}
   		array_push($resultat, ["login"=>$login,"message"=>$message]);
   		$resultat2 = json_encode($resultat);
   		$fichier = fopen($nomDuFichier, 'w+');
   		fwrite($fichier, $resultat2);
   		fclose($fichier);
	   }
        
}