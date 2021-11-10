<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index( Request $request ) {
        return view('test');
    }

    /**
     * create new record
     */
    public function create(Request $request) {
        $test = Test::create([
            'nom'    => $request->nom,
            'prenom'    => $request->prenom,
            'email'    => $request->email,
            'telephone'    => $request->telephone,
            'ville'    => $request->ville,
            'cp'    => $request->cp,
            'adresse'    => $request->adresse,
        ]);

        return back()->with('creation_message', "L'enregistrement a été créé avec succès !");
    }
}
