<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FicheDeSuivi;

class FichesDeSuiviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fichesDeSuivi = new FicheDeSuivi;
        $consultation= $request->session()->get('consultation');

        // recuperation de l'id du patient 
        $fichesDeSuivi->consultation_id = $consultation->id ;
        return view('fichesDeSuivi.create', compact('fichesDeSuivi','consultation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FichedeSuivi::create($this->validateRequest());
        return redirect('../consultations')->with('success','Fiche de suivi enregistrée avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validateRequest(){

        $data =  request()->validate(
            [
                'tension' => '',
                'temperature' => '',
                'poids' => '',
                'motif' => '',
                'symptomes' => '',
                'description' => '',
                'antecedents' => '',
                'diagnostic' => '',
                'prescription' => '',
                'consultation_id' => ''
            ]
        );
        return $data;
    }    
}
