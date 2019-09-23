<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type_consultation;

class Type_consultationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_consultations = Type_consultation::orderBy('nom','asc')->paginate(20);
        return view('type_consultations.index')->with('type_consultations', $type_consultations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_consultation = new Type_consultation();
        return view('type_consultations.create',compact('type_consultation'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $type_consultations = Type_consultation::where('nom','LIKE','%'.$search.'%')->paginate(20);
        return view('type_consultations.index')->with('type_consultations', $type_consultations);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Type_consultation::create($this->validateRequest());
        return redirect('/type_consultations')->with('success','type de consultation crée  avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Type_consultation $type_consultation)
    {
        $type_consultations = Type_consultation::find($type_consultation);
        return view('type_consultations.show', compact('type_consultations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Type_consultation $type_consultation)
    {
        return view('type_consultations.edit',compact('type_consultation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Type_consultation $type_consultation)
    {
        $type_consultation->update($this->validateRequest());

        return redirect('/type_consultations')->with('success','Type de consultation modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_consultation $type_consultation)
    {
        $type_consultation->delete();
        return redirect('/type_consultations')->with('success','Type de consultatiom supprimé  avec succès');
    }

    public function validateRequest(){

        $data =  request()->validate(
            [
                'nom' => 'required',
                'prix' => 'required'
            ]
        );
        return $data;

    }
}
