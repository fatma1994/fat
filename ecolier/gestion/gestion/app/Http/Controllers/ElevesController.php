<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;
use Auth;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    
    public function index()
    {
        $eleve=Eleve::All();
        $eleve=Eleve::orderBy('created_at','DESC')->get();
        return view('eleves.index',compact('eleve'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eleves.create');
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
        'matricule'=>'required',
        'nom'=>'required',
        'prenom'=>'required',
        'sexe'=>'required',
        'date_naissance'=>'required',
        'lieu_naissance'=>'required',
        'telephone'=>'required|max:9'
    ]);


     $elev=new eleve();
     $elev->matricule=$request->input('matricule');
     $elev->nom=$request->input('nom');
     $elev->prenom=$request->input('prenom');
     $elev->sexe=$request->input('sexe');
     $elev->date_naissance=$request->input('date_naissance');
     $elev->lieu_naissance=$request->input('lieu_naissance');
     $elev->telephone=$request->input('telephone');
        //eleves::create(['name'=>$elev]);
     $elev->save();
     return redirect('/eleve');
 }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        if(Auth::user()){
            $eleve = Eleve::where('matricule', $request->input('matricule'))->where('nom', $request->input('nom'))->where('prenom', $request->input('prenom'))->where('sexe', $request->input('sexe'))->where('date_naissance', $request->input('date_naissance'))->where('lieu_naissance', $request->input('lieu_naissance'))->where('telephone', $request->input('telephone'))->get();
            if($eleve){
                return view("eleves.show",compact('eleve'))->withDetails($eleve);
            }else{
               return redirect('/eleve'); 
            }
        }else{
            return redirect('/login');
        }
    }

    public function recherche(Request $request)
    {
        
        if(Auth::user()){
            $eleve = Eleve::where('matricule', $request->input('matricule'))->get();
            if($eleve){
                return view("eleves.show",compact('eleve'))->withDetails($eleve);
            }else{
               return redirect('/eleve'); 
            }
        }else{
            return redirect('/login');
        }
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
               $eleve = Eleve::find($id);
               if($eleve){
                    return view('eleves.edit',compact('eleve'));
                }
           }else{
                return redirect('/home');
            }
        }

        return redirect('/eleve');
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
       $eleve= Eleve::find($id);
       if($eleve){
            $eleve->update([
                'matricule'=>$request->input('matricule'),
                'nom'=>$request->input('nom'),
                'prenom'=>$request->input('prenom'),
                'sexe'=>$request->input('sexe'),
                'date_naissance'=>$request->input('date_naissance'),
                'lieu_naissance'=>$request->input('lieu_naissance'),
                'telephone'=>$request->input('telephone'),
            ]);
        }

        return redirect('/eleve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eleve=Eleve::find($id);
        if($eleve){
            $eleve->delete();
        }

        return redirect('/eleve');
    }
}









































































































































