<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Auth;
class Teacherscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $teacher=teacher::All();
        $teacher=\App\Teacher::orderBy('created_at','DESC')->get();
        return view('teachers.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('teachers.create');
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
        'nom'=>'required',
         'prenom'=>'required',
          'email'=>'required',
           'telephone'=>'required|max:9'
           ]);


          $teacher=new teacher();
         $teacher->nom=$request->input('nom');
          $teacher->prenom=$request->input('prenom');
           $teacher->telephone=$request->input('telephone');
             $teacher->email=$request->input('email');
              
        //eleves::create(['name'=>$elev]);
          $teacher->save();
          return redirect('/teacher');
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
               $teacher = Teacher::find($id);
               if($teacher){
                    return view('teachers.edit',compact('teacher'));
                }
           }else{
                return redirect('/home');
            }
        }

        return redirect('/teacher');
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
           $teacher=\App\Teacher::find($id);
         if($teacher){
            $teacher->update([

                'nom'=>$request->input('nom'),
                'prenom'=>$request->input('prenom'),
                 'email'=>$request->input('email'),
            
                   'telephone'=>$request->input('telephone'),
            ]);
         }
          return redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $teacher=Teacher::find($id);
        if($teacher)
            $teacher->delete();
         return redirect('/teacher');
    }
}
