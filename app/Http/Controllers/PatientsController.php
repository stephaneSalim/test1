<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use DB;

class PatientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $patient = new Patient();
        return view('patients.create',compact('patient'));
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
        Patient::create($this->validateRequest());
        return redirect('/patients')->with('success','Patient crée  avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        session(['patient'=>$patient]);
        return view('patients.show')->with('patient', $patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Patient $patient)
    {
        $patient->update($this->validateRequest());

        return redirect('/patients/'.$patient->id)->with('success','Patient modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect('/patients')->with('success','Patient supprimé  avec succès');
    }

    public function waiting()
    {
        $patients = Patient::where('onWait',1)->get();
        return view('patients.waiting')->with('patients', $patients);
    }

    // regles de validation commune
    public function validateRequest(){

        $data =  request()->validate(
            [
                'nom' => 'required',
                'prenom' => 'required',
                'contact' => 'required',
                'sexe' => '',
                'age' => '',
                'adresse' => ''
            ]
        );

        $data['user_id'] = auth()->user()->id;

        return $data;

    }
}
