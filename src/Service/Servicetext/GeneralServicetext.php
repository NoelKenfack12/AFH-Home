<?php
//(c) Noel Kenfack   Novembre 2016
namespace App\Service\Servicetext;
use App\Service\Servicetext\Cryptor;

class GeneralServicetext
{
public function normaliseText($text)
{
	$text = trim($text); //retire les caractères vide en début et en fin du text.
	$text = $this->retireAccent($text);
	$text =  strtolower($text);
	$text = str_replace("'", "-", $text);
	$text = str_replace(" ", "-", $text); 
	$text = str_replace("_", "-", $text);
	return $text; 
}
public function codepays($text)
{
	$regex = '#^[+-]([0-9]){1,10}$#';
	if (preg_match($regex, $text) || $text == null)
	{
		return true;
	}else{
		return false; 
	}
}

// cette fonction recherche les éléments de tab1 dans la variable texte et remplace par les éléments de tab2 de la même position.
public function retireAccent($text)
{
	$tab1 = array('é','è','à','ù','ç','_','ô','ê','î');
	$tab2 = array('e','e','a','u','c','-','o','e','i');
	$text = str_ireplace($tab1, $tab2, $text);
	return $text;
}

public function email($text)
{
	$regex ='#[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}#i';
	if (preg_match($regex, $text) || $text == null)
	{
		return true;
	}else{
		return false; 
	}
}
public function siteweb($text)
{
	$regex ='#(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?\/?#i';
	if (preg_match($regex, $text) || $text == null)
	{
		return true;
	}else{
		return false; 
	}
}

public function password($text)
{
	$regex = '#^[a-z0-9]([a-z0-9][-_\.]?){6,150}$#i';
	if (preg_match($regex, $text))
	{
		return true;
	}else{
		return false; 
	}
}

public function chaineValide($text,$valmin,$valmax)
{
	$text = trim($text);
	$tail = strlen($text);
	if ($valmin <= $tail and $valmax >= $tail)
	{
		return true;
	}else{
		return false; 
	}
}

public function telephone($text)
{
	$regex = '#^[2-9][0-9]{8}$#';
	if (preg_match($regex, $text))
	{
		return true;
	}else{
		return false; 
	}
}

public function strToHex($string){
	$hex='';
	for ($i=0; $i < strlen($string); $i++){
		$hex .= dechex(ord($string[$i]));
	}
	return $hex;
}

public function hexToStr($hex){
	$string='';
	for ($i=0; $i < strlen($hex)-1; $i+=2){
		$string .= chr(hexdec($hex[$i].$hex[$i+1]));
	}
	return $string;
}

public function decrypt($message, $key)
{
	$message = str_replace(" ", "+", $message);//Quelques caractères supprimés par le navigateur
	$decrypted = Cryptor::Decrypt($message, $key);
	$decrypted = substr($decrypted, 0, -16);//Soustraitre les caractaires ajoutés
	$hex_to_text = $this->hexToStr($decrypted);//Transformer les caractères exadécimal en text simple

	return $hex_to_text;
}

public function encrypt($message, $key)
{
	$text_to_hex = $this->strToHex($message).'AbcDefGhiJKlmNoP';//Transformer le text en hexadécimal pour échaper les carractères spéciaux.
	$encrypted = Cryptor::Encrypt($text_to_hex, $key);//Nous avons injecté ces caractères pour faire en sorte que tout mot à cripter ai plus de 16 caractère.
	return $encrypted;
}

function array_keys_exists(array $keys, array $arr){ //permet de vérifier si les clées citées existent bien dans le tableau
	return !array_diff_key(array_flip($keys), $arr);
}
public function badRequest($error)
{
	return new JsonResponse(array("status-code" => 400, "description" => "Bad Request - ".$error), Response::HTTP_BAD_REQUEST);
}
}