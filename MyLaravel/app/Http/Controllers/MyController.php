<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// come detto a lezione, generare nuovo controller con rotta associata;
// definire poi classe Movie con titolo e descrizione; definire costruttore
// con titolo necessario e descrizione opzionale; e metodo getString()
// che restituisca una stringa riportante tutte le variabili; generare
// poi un paio di istanze e stamparle per mezzo del dd() come visto in classe

class MyController extends Controller
{
    //

    public function home() {

        return view('pages.home');
    }
}