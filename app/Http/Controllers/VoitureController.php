<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use App\Http\Requests\StoreVoitureRequest;
use App\Http\Requests\UpdateVoitureRequest;
use App\Models\Couleur;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voitures= Voiture::all();
        $couleurs= Couleur::all();
        return view('welcome', compact('voitures', 'couleurs'));
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $couleurs =Couleur::all();
    return view('pages.create', compact('couleurs') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVoitureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVoitureRequest $request)
    {
        $store = new Voiture;
        $store->marque = $request->marque;
        $store->annee = $request->annee;
        $store->couleur_id = $request->couleur_id;
        $store->save();

        return redirect()->back()->with('success', 'Voiture add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function show(Voiture $voiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function edit(Voiture $voiture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVoitureRequest  $request
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVoitureRequest $request, Voiture $voiture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voiture $voiture)
    {
        //
    }
}
