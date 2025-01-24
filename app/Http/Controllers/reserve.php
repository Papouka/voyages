<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller // Changement de nom pour respecter les conventions
{
    // Affiche le formulaire de création de réservation
    public function create()
    {
        return view('index.create');
    }

    // Stocke une nouvelle réservation
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|email|max:255', // Ajout de la validation pour l'email
            'destination' => 'required|max:255',
            'date_depart' => 'required|date',
            'nombre_billets' => 'required|integer|min:1', // Validation pour s'assurer que c'est un entier positif
        ]);

        // Insertion dans la base de données
        Reserve::create($request->all());

        // Redirection avec message de confirmation
        return redirect('/index')->with('success', 'Réservation ajoutée avec succès !');
    }
}
