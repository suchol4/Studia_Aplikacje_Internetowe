<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    /**
     * Pobranie parametrów
     */
    public function getParams() {
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->procent = getFromRequest('procent');
    }

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

    /**
     * Pobranie wartości, walidacja, obliczenie i wyświetlenie
     */
    public function action_calcCompute() {

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
    
    public function action_calcShow() {
        getMessages()->addInfo('Witaj w kalkulatorze');
        $this->generateView();
    }

    /**
     * Wygenerowanie widoku
     */
    public function generateView() {  
        getSmarty()->assign('user',unserialize($_SESSION['user']));

        getSmarty()->assign('page_title', 'Kalkulator bankowy');
        getSmarty()->assign('page_description', 'Utworzenie stroy wraz z szablonowaniem Labolatoria cz. 3');
        getSmarty()->assign('page_header', 'Szablony Jakub Dynowski');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        //Wywołanie szablonu
        getSmarty()->display('bankowy_calc.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
    }
}
