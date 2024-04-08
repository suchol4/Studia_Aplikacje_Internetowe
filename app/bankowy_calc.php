<?php

require_once dirname(__FILE__).'/../config.php';

//$amount = $_REQUEST ['kwota'];
//$years = $_REQUEST ['lata'];
//$rate = $_REQUEST ['procent'];

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$amount,&$years,&$rate){
	$amount = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$years = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$rate = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;	
}


function validate(&$amont,&$years,&$rate,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($amont) && isset($years) && isset($rate))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $amont == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $years == "") {
		$messages [] = 'Nie podano długości kredytu w latach';
	}
        if ($rate == "") {
            $messages [] = 'Nie podano oprocentowania kredytu';
        }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count($messages) != 0) {
        return false;
    }

    // sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $amont )) {
		$messages [] = 'Błędny format kwoty, należy podać jako liczbę';
	}
	
	if (! is_numeric( $years )) {
		$messages [] = 'Błędny format lat, należy podać jako liczbe!';
	}
        
        if (! is_numeric( $rate )) {
		$messages [] = 'Błędny format oprocentowania, należy podać jako liczbę!';
	}	


	if (count($messages) != 0) {
        return false;
    } else {
        return true;
    }
}


function process(&$amount,&$years,&$rate,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$amount = intval($amount);
	$years = intval($years);
	$rate = floatval($rate);
	$months = 12;

	$interest = ($amount/($years*$months))*($rate*0.01);
	$capital = $amount/($years*$months);
	

	$result = round($capital + $interest);
}

//definicja zmiennych kontrolera
$amunt = null;
$years = null;
$rate = null;
$result = null;
$messages = array();

getParams($amunt,$years,$rate);
if ( validate($amunt,$years,$rate,$messages) ) { // gdy brak błędów
	process($amunt,$years,$rate,$messages,$result);
}

include 'bankowy_view.php';

//if ( ! (isset($amount) && isset($years) && isset($rate))) {
//
//	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
//}
//
//if ( $amount == "") {
//	$messages [] = 'Nie podano kwoty';
//}
//if ( $years == "") {
//	$messages [] = 'Nie podano długości kredytu w latach';
//}
//if ( $rate == "") {
//	$messages [] = 'Nie podano oprocentowania kredytu';
//}

//if (empty( $messages )) {
//	
//	if (! is_numeric( $amount )) {
//		$messages [] = 'Błędny format kwoty, należy podać jako liczbę!';
//	}
//	
//	if (! is_numeric( $years )) {
//		$messages [] = 'Błędny format lat, należy podać jako liczbe!';
//	}	
//
//	if (! is_numeric( $rate )) {
//		$messages [] = 'Błędny format oprocentowania, należy podać jako liczbę!';
//	}	
//
//}

//if (empty ( $messages )) {
//	
//	$amount = intval($amount);
//	$years = intval($years);
//	$rate = floatval($rate);
//	$months = 12;
//
//	$interest = ($amount/($years*$months))*($rate*0.01);
//	$capital = $amount/($years*$months);
//	
//
//	$result = round($capital + $interest);
//}






