<?php

namespace App\Http\Controllers;

use App\Models\offre;
use App\Http\Requests\StoreoffreRequest;
use App\Http\Requests\UpdateoffreRequest;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $offres= offre::all();
       return response()->json($offres);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        offre::create([
            "title"=>$request->title,
            "description"=>$request->description,
        
        ]);
        return response()->json(["message"=>"tamma binajah"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(offre $offre )
    {
        // $offre=offre::find($id);
        return response()->json($offre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, offre $offre)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:500',

    ]);
    $offre->update($validated);
    // $offre=offre::find($id);
    // $offre->update(["title"=>$request->title,"description"=>$request->description]);

    return response()->json([
        'message' => 'Offre mise à jour avec succès',
        'offre' => $offre,
    ]);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(offre $offre)
    {
        //
    }
}
