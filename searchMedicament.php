<?php

        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://www.open-medicaments.fr/api/v1/medicaments?query=".$_GET['search']);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);
        // close curl resource to free up system resources
        curl_close($ch);
        
        echo $output;

//         public function getSideEffectsFromCIS($cis) {
// 		echo $cis."<br>";
// 		$url = "http://base-donnees-publique.medicaments.gouv.fr/affichageDoc.php?specid=".$cis."&typedoc=R";
// 		$html = file_get_html($url);
// 		$sideEffect = "Aucun";
// 		if($html && isset($html->find('#textDocument')[0])) {
// 			$response = $html->find('#textDocument')[0]->children;
// 			$allowNext = false;
// 			$sideEffect = "";
// 			foreach ($response as $element) {
// 				if($allowNext) {
// 					if($element->class === "AmmAnnexeTitre2") {
// 						$allowNext = false;
// 						break;
// 					}
// 					$sideEffect .= $element->plaintext."<br />";
// 				}
// 				if($element->class === "AmmAnnexeTitre2" && isset($element->children[0]) && $element->children[0]->attr['name'] === "RcpEffetsIndesirables") {
// 					$allowNext = true;
// 				}
// 			}
// 		}
// 		return $sideEffect;
// 	}
// }