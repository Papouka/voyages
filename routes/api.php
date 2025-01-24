<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'destination' => 'required|string|max:100',
            'date_depart' => 'required|date',
            'nombre_billets' => 'required|integer',
        ]);

        // Création de la réservation
        Reserve::create($request->all());

        return redirect()->back()->with('success', 'Réservation effectuée avec succès.');
    }
}
?>