<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// come detto a lezione, generare nuovo controller con rotta associata;
// definire poi classe Movie con titolo e descrizione; definire costruttore
// con titolo necessario e descrizione opzionale; e metodo getString()
// che restituisca una stringa riportante tutte le variabili; generare
// poi un paio di istanze e stamparle per mezzo del dd() come visto in classe

class Movie {

    public $titolo;

    public $descrizione;

    public function _construct($titolo, $descrizione) {

        $this -> titolo = $titolo;
        $this -> descrizione = $descrizione == null ? 'nessuna descrizione' : $descrizione;
    }

    public function getString() {

        return "Movie '" . $this-> titolo . "' :<br>" . $this-> descrizione;;
    }

}

class MyController extends Controller
{
    //

    public function home() {

        $filmUno = new Movie('Narnia', 'Smettiamola di nascondere i bimbi negli armadi!!!!!');
        $filmDue = new Movie('Sono tornato');

        $str1 = $filmUno -> getString();
        $str2 = $filmDue -> getString();

        // dd($filmUno, $filmDue, $str1, $str2);

        return view('pages.home', compact('filmUno', 'filmDue'));
    }
}