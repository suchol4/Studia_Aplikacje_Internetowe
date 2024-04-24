<?php

require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['procent'] = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;	
}


function validate(&$form,&$infos,&$msgs){
    
    //sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
	if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['procent']) ))	return false;	
	
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 

	$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty';
	if ( $form['lata'] == "") $msgs [] = 'Nie podano długości kredytu w latach';
        if ( $form['procent'] == "") $msgs [] = 'Nie podano oprocentowania kredytu';
	
	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($msgs)==0 ) {
		// sprawdzenie, czy $kwota , $lata i $procent są liczbami całkowitymi
		if (! is_numeric( $form['kwota'] )) $msgs [] = 'Błędny format kwoty, należy podać jako liczbę';
		if (! is_numeric( $form['lata'] )) $msgs [] = 'Błędny format lat, należy podać jako liczbe!';
                if (! is_numeric( $form['procent'] )) $msgs [] = 'Błędny format oprocentowania, należy podać jako liczbę!';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}


function process(&$form,&$infos,&$msgs,&$result){

        $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
 
	//konwersja parametrów na int
	$form['kwota'] = intval($form['kwota']);
	$form['lata'] = intval($form['lata']);
	$form['procent'] = floatval($form['procent']);
	$months = 12;
        
        $interest = ($form['kwota']/($form['lata']*$months))*($form['procent']*0.01);
        $capital = $form['kwota']/($form['lata']*$months);
	

	$result = round($capital + $interest);
}

//definicja zmiennych kontrolera
$form = null;
$infos = array();
$messages = array();
$result = null;

getParams($form);
if ( validate($form,$infos,$messages) ){
	process($form,$infos,$messages,$result);
}


//Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator bankowy');
$smarty->assign('page_description','Utworzenie stroy wraz z szablonowaniem Labolatoria cz. 3');
$smarty->assign('page_header','Szablony Jakub Dynowski');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

//Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/bankowy_calc.tpl');

