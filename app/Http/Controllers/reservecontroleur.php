<?php

namespace App\Http\Controllers;
use App\Models\Reservemodel;
use Illuminate\Http\Request;

class reservecontroleur extends Controller
{
    public function create()
    {
        return view('contact.create'); // Affiche le formulaire
    }


    public function store(Request $request)
    {
        $request->validate([ // Validation des données
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'destination' => 'required|max:255',
            'date_depart' => 'required|date',
            'nombre_billets' => 'required|max:255',
        ]);

        Reservemodel::create($request->all()); // Insertion dans la base

        return redirect('/contact')->with('success', 'reservation ajouté avec succès !'); // Redirection et message de confirmation
    }

    /*public function index(){
        $apprenants = Apprenant::all();
        return view('apprenants.index', compact('apprenants'));
    }*/

}
