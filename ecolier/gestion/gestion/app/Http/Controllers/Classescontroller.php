<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;
use Auth;

class Classescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $classe=Classe::All();
        $classe=\App\Classe::orderBy('created_at','Desc')->get();
        return view('classes.index',compact('classe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $serie=\App\Serie::pluck('code','id');
        $niveau=\App\Niveau::pluck('code','id');
         return view('classes.create',compact('serie','niveau'));
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
       'libellé'=>'required',
        'niveau_id'=>'required',
        'serie_id'=>'required',

        
      ]);



          $classe=new classe();
            $classe->libellé=$request->input('libellé');
             $classe->serie_id=$request->input('serie_id');
             $classe->niveau_id=$request->input('niveau_id');
        //eleves::create(['name'=>$elev]);
          $classe->save();
          return redirect('/classe');
          //return 'enregistrer';
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
                 $classe=Classe::find($id);
                $niveau=\App\Niveau::pluck('code','id');
                 $serie=\App\Serie::pluck('code','id');
               if($classe){
                    return view('classes.edit',compact('classe','niveau','serie'));
                }
           }else{
                return redirect('/home');
            }
        }

        return redirect('/classe');

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
        $classe=\App\Classe::find($id);
         if($classe){
            $classe->update([  
            'libellé'=>$request->input('libellé'),
            'serie_id'=>$request->input('serie_id'),
             'niveau_id'=>$request->input('niveau_id '),
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
        $classe=Classe::find($id);
        if($classe)
            $classe->delete();
        return redirect()->route('classes.index');
    }
}
