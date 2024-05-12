<?php

//require_once $conf->root_path . '/lib/smarty/Smarty.class.php';
//require_once $conf->root_path . '/lib/Messages.class.php';
//require_once $conf->root_path . '/app/calc/CalcForm.class.php';
//require_once $conf->root_path . '/app/calc/CalcResult.class.php';

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

class CalcCtrl {

    private $msgs;  // wiadomości dla widoku
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

//    public function __construct() {
//        //stworzenie potrzebnych obiektów
//        $this->msgs = new Messages();
//        $this->form = new CalcForm();
//        $this->result = new CalcResult();
//    }
//    
    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->msgs = new Messages();
    }

//    public function getParams() {
//        $this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
//        $this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
//        $this->form->procent = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
//    }
    
    /**
     * Pobranie parametrów
     */
    public function getParams() {
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->procent = getFromRequest('procent');
    }

//    public function validate() {
//        // sprawdzenie, czy parametry zostały przekazane
//        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->procent))) {
//            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
//            return false; //zakończ walidację z błędem
//        }
//
//        // sprawdzenie, czy potrzebne wartości zostały przekazane
//        if ($this->form->kwota == "") {
//            $this->msgs->addError('Nie podano kwoty');
//        }
//        if ($this->form->lata == "") {
//            $this->msgs->addError('Nie podano długości kredytu w latach');
//        }
//        if ($this->form->procent == "") {
//            $this->msgs->addError('Nie podano oprocentowania kredytu');
//        }
//
//        // nie ma sensu walidować dalej gdy brak parametrów
//        if (!$this->msgs->isError()) {
//
//            // sprawdzenie, czy $kwota, $lata oraz $procent są liczbami całkowitymi
//            if (!is_numeric($this->form->kwota)) {
//                $this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
//            }
//
//            if (!is_numeric($this->form->lata)) {
//                $this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
//            }
//
//            if (!is_numeric($this->form->procent)) {
//                $this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
//            }
//        }
//
//        return !$this->msgs->isError();
//    }
    
    /**
     * Walidacja parametrów
     * @return true jeśli brak błedów, false w przeciwnym wypadku 
     */
    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->procent))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form->lata == "") {
            getMessages()->addError('Nie podano długości kredytu w latach');
        }
        if ($this->form->procent == "") {
            getMessages()->addError('Nie podano oprocentowania kredytu');
        }

        // nie ma sensu walidować dalej gdy brak parametrów
        if (!getMessages()->isError()) {

            // sprawdzenie, czy $kwota, $lata oraz $procent są liczbami całkowitymi
            if (!is_numeric($this->form->kwota)) {
                getMessages()->addError('Kwota nie jest podana jako liczba całkowita');
            }

            if (!is_numeric($this->form->lata)) {
                getMessages()->addError('Lata nie są podane jako liczba całkowita');
            }
            
            if (!is_numeric($this->form->procent)) {
                getMessages()->addError('Procenty nie są podane jako liczba całkowita');
            }
        }

        return !getMessages()->isError();
    }

//    public function process() {
//
//        $this->getparams();
//
//        if ($this->validate()) {
//
//            //konwersja parametrów na int
//            $this->form->kwota = intval($this->form->kwota);
//            $this->form->lata = intval($this->form->lata);
//            $this->form->procent = floatval($this->form->procent);
//            $this->msgs->addInfo('Dane do kredytu poprawne. ');
//            $months = 12;
//
//            //wykonanie operacji
//
//            $interest = ($this->form->kwota / ($this->form->lata * $months)) * ($this->form->procent * 0.01);
//            $capital = ($this->form->kwota) / ($this->form->lata * $months);
//
//            $this->result->result = round($capital + $interest);
//
//            $this->msgs->addInfo('Wykonano kalkulacje kredytu. ');
//        }
//        $this->generateView();
//    }
    
    /**
     * Pobranie wartości, walidacja, obliczenie i wyświetlenie
     */
    public function process() {

        $this->getParams();

        if ($this->validate()) {

            //konwersja parametrów na int
            $this->form->kwota = intval($this->form->kwota);
            $this->form->lata = intval($this->form->lata);
            $this->form->procent = floatval($this->form->procent);
            getMessages()->addInfo('Dane do kredytu poprawne. ');
            $months = 12;

            //wykonanie operacji

            $interest = ($this->form->kwota / ($this->form->lata * $months)) * ($this->form->procent * 0.01);
            $capital = ($this->form->kwota) / ($this->form->lata * $months);

            $this->result->result = round($capital + $interest);

            getMessages()->addInfo('Wykonano kalkulacje kredytu. ');
        }

        $this->generateView();
    }

//    function generateView() {
//        global $conf;
//
//        $smarty = new Smarty();
//        $smarty->assign('conf', $conf);
//
//        $smarty->assign('app_url', $conf->app_url);
//        $smarty->assign('root_path', $conf->root_path);
//        $smarty->assign('page_title', 'Kalkulator bankowy');
//        $smarty->assign('page_description', 'Utworzenie stroy wraz z szablonowaniem Labolatoria cz. 3');
//        $smarty->assign('page_header', 'Szablony Jakub Dynowski');
//
//        $smarty->assign('form', $this->form);
//        $smarty->assign('res', $this->result);
//        $smarty->assign('msgs', $this->msgs);
//
//        //Wywołanie szablonu
//        $smarty->display($conf->root_path . '/app/calc/bankowy_calc.tpl');
//    }
    
    /**
     * Wygenerowanie widoku
     */
    public function generateView() {
        //nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
        // - wszystko załatwia funkcja getSmarty()

        getSmarty()->assign('page_title', 'Kalkulator bankowy');
        getSmarty()->assign('page_description', 'Utworzenie stroy wraz z szablonowaniem Labolatoria cz. 3');
        getSmarty()->assign('page_header', 'Szablony Jakub Dynowski');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        //Wywołanie szablonu
        getSmarty()->display('bankowy_calc.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
    }
}
