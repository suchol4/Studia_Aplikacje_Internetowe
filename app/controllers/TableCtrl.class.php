<?php

namespace app\controllers;

use PDOException;

class TableCtrl {

    private $records; //rekordy pobrane z bazy danych

    public function action_tableView() {
        try {
            $this->records = getDB()->select("wynik", [
                "idwynik",
                "kwota",
                "lat",
                "procent",
                "rata",
                "data",
                    ]);
        } catch (PDOException $e) {
            getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
            if (getConf()->debug)
                getMessages()->addError($e->getMessage());
        }


        // 4. wygeneruj widok
        getSmarty()->assign('rates', $this->records);  // lista rekordów z bazy danych
        getSmarty()->display('TableView.tpl');
    }
}
