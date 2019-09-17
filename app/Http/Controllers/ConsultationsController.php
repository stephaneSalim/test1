<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;
use App\Patient;
use Carbon\Carbon;

class ConsultationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultations = Consultation::whereDate('created_at', Carbon::today())->orderBy('created_at','asc')->paginate(20);
        //dd($consultations);
        return view('consultations.index')->with('consultations', $consultations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $consultation = new Consultation();

        $patient= $request->session()->get('patient');

        // recuperation de l'id du patient 
        $consultation->patient_id = $patient->id ;

        //$consultation->patient()->id= $request->session()->get('patient');

        return view('consultations.create',compact('consultation','patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Consultation::create($this->validateRequest());
        return redirect('/consultations')->with('success','consultation créee avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultation = Consultation::find($id);
        session(['consultation'=>$consultation]);
        return view('consultations.show')->with('consultation', $consultation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        return view('consultations.edit',compact('consultation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Consultation $consultation)
    {
        $consultation->update($this->validateRequest());

        return redirect()->route('consultations.index')->with('success','Infos de l\'accompagnant modifiés avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        $consultation->delete();
        return redirect()->route('consultations.index')->with('success','Patient supprimé  avec succès');
    }

    public function validateRequest(){

        $data =  request()->validate(
            [
                'accompagnant' => '',
                'contactaccompagnant' => '',
                'reference' => '',
                'onWait' => '',
                'patient_id' => ''
            ]
        );

        //$data['user_id'] = auth()->user()->id;

        return $data;

    }
}
