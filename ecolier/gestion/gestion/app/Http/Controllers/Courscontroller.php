<?php

namespace App\Http\Controllers;
use App\Cours;

use Illuminate\Http\Request;

class Courscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $cours=cours::All();
        $cours=\App\Cours::orderBy('created_at','Desc')->get();
        return view('cours.index',compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
               $teacher=\App\Teacher::pluck('telephone','id');
         $classe=\App\Classe::pluck('libellé','id');
           $matiere=\App\Matiere::pluck('libelle','id');
         return view('cours.create',compact('teacher','classe','matiere'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $cours=new cours();
         $cours->heure_debut=$request->input('heure_debut');
          $cours->heure_fin=$request->input('heure_fin');
           $cours->etat=$request->input('etat');
             $cours->teacher_id=$request->input('teacher_id');
              $cours->classe_id=$request->input('Classe_id');
                $cours->matiere_id=$request->input('Matiere_id');
        //eleves::create(['name'=>$elev]);
          $cours->save();
           return redirect('/cours');
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

     

        
        $cours=\App\Cours::find($id);
         $teacher=\App\Teacher::pluck('telephone','id');
           $classe=\App\Classe::pluck('libellé','id');
            $matiere=\App\Matiere::pluck('libelle','id');

        return view('cours.edit',compact('cours','teacher','classe','matiere'));
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
         $cours=\App\Cours::find($id);
         if($cours){
            $cours->update([
        'heure_debut'=>$request->input('heure_debut'),
         'heure_fin'=>$request->input('heure_fin'),
         'etat'=>$request->input('etat'),
            'teacher_id'=>$request->input('teacher_id'),
             'classe_id'=>$request->input('Classe_id'),
              'matiere_id'=>$request->input('Matiere_id'),
            ]);
         }
         return redirect()->back;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $cours=Cours::find($id);
        if($cours)
            $cours->delete();
        return redirect()->route('cours.index');
    }
}
