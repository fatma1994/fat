<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;
use Auth;

class Matierescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $matiere=Matiere::All();
        $matiere=\App\Matiere::orderBy('created_at','DESC')->get();
        return view('matieres.index',compact('matiere'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matieres.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $matiere=new matiere();
         $matiere->libelle=$request->input('libelle');
          $matiere->coefficient=$request->input('coefficient');
        
        //eleves::create(['name'=>$elev]);
          $matiere->save();
          return redirect('/matiere');
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

         /* $data=$request->validate([
        'libelle'=>'required',
        'coefficient'=>'required|numeric',
        
      ]);*/
        if(Auth::user()){
            if(Auth::user()->role === 'admin'){
               $matiere = Matiere::find($id);
               if($matiere){
                    return view('matieres.edit',compact('matiere'));
                }
           }else{
                return redirect('/home');
            }
        }

        return redirect('/matiere');
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
         $matiere=\App\Matiere::find($id);
         if($matiere){
            $matiere->update([
                'libelle'=>$request->input('libelle'),
                'coefficient'=>$request->input('coefficient'),
               
            ]);
         }
         return redirect('/matiere');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $matiere=Matiere::find($id);
        if($matiere)
            $matiere->delete();
       // return redirect()->route('matieres.index');
        return redirect('/matiere');
    }
}
