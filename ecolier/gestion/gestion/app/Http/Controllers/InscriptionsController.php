<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Inscription;
use Auth;


class InscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /* if(Auth::user()->role === 'admin'){
         $inscription=inscription::All();
        $inscription=\App\Inscription::orderBy('created_at','Desc')->get();
        return view('inscriptions.index',compact('inscription'));
    }else{
            return redirect('/home');
        }
    
     return redirect('/inscription');*/

  $inscription=Inscription::All();
        $inscription=Inscription::orderBy('created_at','Desc')->get();
        return view('inscriptions.index',compact('inscription'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
      // $this->authorize('admin');
        $eleve=\App\Eleve::pluck('matricule','id');
         $classe=\App\Classe::pluck('libellé','id');
         return view('inscriptions.create',compact('eleve','classe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      $data=$request->validate([
        'date_inscrit'=>'required',
        'frais_inscription'=>'required',
         'annee_academique'=>'required',
         'date_inscrit'=>'required',
         'eleve_id'=>'required',
         'classe_id'=>'required',
      ]);


        $insc=new inscription();
         $insc->date_inscrit=$request->input('date_inscrit');
          $insc->frais_inscription=$request->input('frais_inscription');
           $insc->annee_academique=$request->input('annee_academique');
             $insc->eleve_id=$request->input('eleve_id');
              $insc->classe_id=$request->input('classe_id');
        //eleves::create(['name'=>$elev]);
          $insc->save();
          //return 'bien registrer';
         return redirect('/inscription');
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
         if(Auth::user()){
            if(Auth::user()->role === 'admin'){
                 $inscription=Inscription::find($id);
                $eleve=\App\Eleve::pluck('matricule','id');
                 $classe=\App\Classe::pluck('libellé','id');
               if($inscription){
                    return view('inscriptions.edit',compact('inscription','eleve','classe'));
                }
           }else{
                return redirect('/home');
            }
        }

        return redirect('/inscription');

      
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
        $inscription=\App\Inscription::find($id);
         if($inscription){
            $inscription->update([
        'date_inscrit'=>$request->input('date_inscrit'),
          'frais_inscription'=>$request->input('frais_inscription'),
           'annee_academique'=>$request->input('annee_academique'),
            'eleve_id'=>$request->input('eleve_id'),
             'classe_id'=>$request->input('classe_id'),
            ]);
         }
         return redirect('/inscription');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$this->authorize('admin');
          $inscription=Inscription::find($id);
        if($inscription)
            $inscription->delete();
        //return redirect()->route('inscriptions.index');
           return redirect('/inscription');
    }
}
