<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classs;
use App\Section;

class ClassesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes =  classs::all();
        return view('classes.index')->with('classes',$classes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = section::all();
        return view('classes.create')->with('sections', $sections);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'label' => 'required',
            'section' => 'required|integer'
        ]);

        //create classs
        $classe = new Classs;
        $classe->label = $request->input('label');
        $classe->section = $request->input('section');
        $classe->created_by = auth()->user()->id;
        $classe->updated_by = auth()->user()->id;
        $classe->save();

        return redirect('/classes')->with('success','Classe créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classe = Classs::find($id);
        return view('classes.show')->with('classe', $classe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classe = Classs::find($id);
        return view('classes.edit')->with('classe', $classe);
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
        $this->validate($request, [
            'label' => 'required',
        ]);

        //update classe
        $classe = Classs::find($id);
        $classe->label = $request->input('label'); 
        $classe->updated_by = auth()->user()->id;       
        $classe->save();

        return redirect('/classes')->with('success','Classe mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classe = Classs::find($id);
        $classe->delete();

        return redirect('/classes')->with('success','Classe supprimée');
    }
}
