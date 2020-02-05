<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveau;
use Auth;

class Niveauxcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $niveau=Niveau::All();
        $niveau=\App\Niveau::orderBy('created_at','DESC')->get();
        return view('niveaux.index',compact('niveau'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('niveaux.create');
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
        'code'=>'required',
        
      ]);


            $niveau=new niveau();
         $niveau->code=$request->input('code');
            $niveau->save();
          return redirect('/classe');
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
                 $niveau=Niveau::find($id);
               if($niveau){
                    return view('niveaux.edit',compact('niveau'));
                }
           }else{
                return redirect('/home');
            }
        }

        return redirect('/niveau');
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
           $niveau=\App\Niveau::find($id);
         if($niveau){
            $niveau->update([
                'code'=>$request->input('code')
                   ]);
         }
          return redirect('/niveau');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $niveau=Niveau::find($id);
        if($niveau)
            $niveau->delete();
         return redirect('/niveau');
    }
}
