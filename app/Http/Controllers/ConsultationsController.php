<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;
use App\Patient;
use App\FicheDeSuivi;
use App\Type_consultation;
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
        $consultations = Consultation::whereDate('created_at', Carbon::today())->where('onWait','=',1)->orderBy('created_at','asc')->paginate(20);
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
        $type_consultations = Type_consultation::all();
        return view('consultations.create',compact('consultation','patient','type_consultations'));
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
    public function show(Consultation $consultation)
    {
        session(['consultation'=>$consultation]);
        return view('consultations.show',compact('consultation'));
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
        if($consultation->onWait == 1){
            return redirect()->route('consultations.index')->with('success','Infos de l\'accompagnant modifiés avec succès');
        }else{
            return redirect()->route('fichesDeSuivi.create');
        }
        
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
                'type_consultation_id'=>'',
                'accompagnant' => '',
                'contactaccompagnant' => '',
                'reference' => '',
                'onWait' => '',
                'patient_id' => ''
            ]
        );
        return $data;
    }
}
