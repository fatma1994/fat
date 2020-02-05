<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use Auth;

class Seriescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $serie=serie::All();
        $serie=\App\Serie::orderBy('created_at','DESC')->get();
        return view('series.index',compact('serie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
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
        
        $serie=new serie();
         $serie->code=$request->input('code');
            $serie->save();
          return redirect('classe');
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
                 $serie=Serie::find($id);
               if($serie){
                    return view('series.edit',compact('serie'));
                }
           }else{
                return redirect('/home');
            }
        }

        return redirect('/serie');
      
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
         $eleve=\App\Eleve::find($id);
         if($eleve){
            $eleve->update([
                'code'=>$request->input('code')
                   ]);
         }
          return redirect('/serie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $serie=Serie::find($id);
        if($serie)
            $serie->delete();
       // return redirect()->route('series.index');
         return redirect('/serie');
    }
}
