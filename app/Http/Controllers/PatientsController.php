<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use DB;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::orderBy('nom','asc')->paginate(20);
        return view('patients.index')->with('patients', $patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $patients = Patient::where('nom','LIKE','%'.$search.'%')->paginate(5);
        return view('patients.index')->with('patients', $patients);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required'
        ]);

        $patient = new Patient;
        $patient->nom = $request->input('nom');
        $patient->prenom = $request->input('prenom');
        $patient->age = $request->input('age');
        $patient->sexe = $request->input('sexe');
        $patient->adresse = $request->input('adresse');
        $patient->contact = $request->input('contact');
        $patient->user_id = auth()->user()->id;
        //$patient->onWait = $request->input('onWait');
        $patient->save();

        return redirect('/patients')->with('success','Patient créé  avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        session(['patient'=>$patient]);
        return view('patients.show')->with('patient', $patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patients.edit')->with('patient', $patient);
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
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required'
        ]);

        $patient = Patient::find($id);
        $patient->nom = $request->input('nom');
        $patient->prenom = $request->input('prenom');
        $patient->age = $request->input('age');
        $patient->sexe = $request->input('sexe');
        $patient->adresse = $request->input('adresse');
        $patient->contact = $request->input('contact');
        $patient->save();

        return redirect('/patients')->with('success','Patient modifié  avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('/patients')->with('success','Patient supprimé  avec succès');
    }

    public function waiting()
    {
        $patients = Patient::where('onWait',1)->get();
        return view('patients.waiting')->with('patients', $patients);
    }
}
