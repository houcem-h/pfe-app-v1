<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use App\User;

class TeachersController extends Controller
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
        // $teachers =  User::where('userPrivilege', '<>', 0);
        // $teachers =  User::all();
        
        //query builder
        $teachers = DB::table('users')
            ->where('userPrivilege', '!=', 0)
            ->orderBy('firstname','asc')
            ->paginate(10);

        return view('teachers.index')->with('teachers', $teachers);
    }

    public function uploadlist()
    {
        // return view('students.uploadlist');
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
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',            
            'phone' => 'required'
        ]);

        // create teacher account
        $data = array(
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'ncin' => $request->input('ncin'),
            'userPrivilege' => $request->input('userPrivilege'),
        );
        $teacher = new RegisterController;    
        $teacher->create($data);
        return redirect('/teachers')->with('success','Enseignant ajouté');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = User::find($id);
        return view('teachers.show')->with('teacher',$teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = User::find($id);
        return view('teachers.edit')->with('teacher',$teacher);
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',            
            'phone' => 'required',
            'ncin' => 'required',
            'userPrivilege' => 'required',
        ]);

        //update teacher
        $teacher = User::find($id);
        $teacher->firstname = $request->input('firstname');
        $teacher->lastname = $request->input('lastname');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->ncin = $request->input('ncin');;
        $teacher->userPrivilege = $request->input('userPrivilege');     
        $teacher->save();

        return redirect('/teachers')->with('success','Enseignant mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = User::find($id);
        $teacher->delete();

        return redirect('/teachers')->with('success','Enseignant supprimé');
    }
}
