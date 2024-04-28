<?php

require_once $conf->root_path . '/lib/smarty/Smarty.class.php';
require_once $conf->root_path . '/lib/Messages.class.php';
require_once $conf->root_path . '/app/CalcForm.class.php';
require_once $conf->root_path . '/app/CalcResult.class.php';

class CalcCtrl {

    private $msgs;   //wiadomości dla widoku
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    //Pobranie parametrów

    public function getParams() {
        $this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
        $this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
        $this->form->procent = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
    }

    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->procent))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false; //zakończ walidację z błędem
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->kwota == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this->form->lata == "") {
            $this->msgs->addError('Nie podano długości kredytu w latach');
        }
        if ($this->form->procent == "") {
            $this->msgs->addError('Nie podano oprocentowania kredytu');
        }

        // nie ma sensu walidować dalej gdy brak parametrów
        if (!$this->msgs->isError()) {

            // sprawdzenie, czy $kwota, $lata oraz $procent są liczbami całkowitymi
            if (!is_numeric($this->form->kwota)) {
                $this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->lata)) {
                $this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->procent)) {
                $this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
            }
        }

        return !$this->msgs->isError();
    }

    public function process() {

        $this->getparams();

        if ($this->validate()) {

            //konwersja parametrów na int
            $this->form->kwota = intval($this->form->kwota);
            $this->form->lata = intval($this->form->lata);
            $this->form->procent = floatval($this->form->procent);
            $this->msgs->addInfo('Dane do kredytu poprawne. ');
            $months = 12;

            //wykonanie operacji

            $interest = ($this->form->kwota / ($this->form->lata * $months)) * ($this->form->procent * 0.01);
            $capital = ($this->form->kwota) / ($this->form->lata * $months);

            $this->result->result = round($capital + $interest);

            $this->msgs->addInfo('Wykonano kalkulacje kredytu. ');
        }
        $this->generateView();
    }

    function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('app_url', $conf->app_url);
        $smarty->assign('root_path', $conf->root_path);
        $smarty->assign('page_title', 'Kalkulator bankowy');
        $smarty->assign('page_description', 'Utworzenie stroy wraz z szablonowaniem Labolatoria cz. 3');
        $smarty->assign('page_header', 'Szablony Jakub Dynowski');

        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);
        $smarty->assign('msgs', $this->msgs);

        //Wywołanie szablonu
        $smarty->display($conf->root_path . '/app/bankowy_calc.tpl');
    }
}
