<?php

	// Kiem tra du lieu khac rong
	function checkEmpty($value){
		$flag = false;
		if(!isset($value) || trim($value) == ""){
			$flag = true;
		}
		return $flag;
	}
	
	// Kiem tra chieu dai du lieu
	function checkLength($value, $min, $max){
		$flag 	= false;
		$length	= strlen($value);
		if($length < $min || $length > $max){
			$flag = true;
		}
		return $flag;
	}
	
	// Tao ra ten file
	function randomString($length = 5){
		
		$arrCharacter = array_merge( range(0,9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);
		
		$result		= substr($arrCharacter, 0, $length);
		return $result;
	}
	
	// Size
	function convertSize($size, $totalDigit = 2, $ditance = ' '){
		$units	= array('B', 'KB', 'MB', 'GB', 'TB');
	
		$length	= count($units);
		for($i = 0; $i < $length; $i++){
			if($size > 1024) {
				$size	= $size / 1024;
			}else {
				$unit	= $units[$i];
				break;
			}
		}
	
		$result = round($size, $totalDigit) . $ditance . $unit;
		return $result;
    }
    
function checkSizeFile($size,$min,$max){
    $flag = false;
    if($size >= $min && $size<= $max) $flag = true;
    return $flag;
}



// Check file extenstion  

function checkExtensionFile($fileName, $arrExtension){
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $flag = FALSE;
    if(in_array(strtolower($ext), $arrExtension) == true) $flag = true;
    return $flag;
}


function ramdomstring($fileName, $length = 6 ){
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $arrCharater = array_merge(range('A','Z'),range('a','z'), range(0,9));
    $arrCharater = implode($arrCharater,'');
    $arrCharater = str_shuffle($arrCharater);
    $result = substr($arrCharater, 0, $length) . '.' .$ext;

    return $result;
}

