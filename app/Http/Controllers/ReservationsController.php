<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationsModel; // Assurez-vous que le modèle est correctement importé
use Illuminate\Support\Facades\Validator; // Importer le validateur

class ReservationsController extends Controller
{
    public function reservation1(Request $request)
    {
        // Validation des données d'entrée
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:55',
            'email' => 'required|email|max:45',
            'destination' => 'required|string|max:45',
            'date_depart' => 'required|date',
            'nombre_billets' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        return $this->store($request);
    }

    public function store(Request $request)
    {
        ReservationsModel::create([
            'nom' => $request->nom,                  
            'email' => $request->email,
            'destination' => $request->destination,
            'date_depart' => $request->date_depart,
            'nombre_billets' => $request->nombre_billets,
        ]);

        return redirect('index')->with('success', 'Réservation réussie!');
    }
}

