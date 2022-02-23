<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use App\Models\Module;
use Illuminate\Http\Request;

class DisciplineCtr extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $disciplines = Discipline::all();
        return view('discipline.index')->with('disciplines', $disciplines );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();
        return view('discipline.create', compact(var_name:'modules')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $discipline = new Discipline();
        $module = Module::find('id');
        $discipline ->name = $request->input('name');
        $discipline ->modules_id = $request->input('namemodule');
        $discipline ->save();
        return redirect(route('discipline.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $discipline = Discipline::find($id);

        if($discipline)
            return view('discipline.show')->with('discipline', $discipline);
        else
            abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discipline= Discipline::find($id);
        $modules = Module:: all();

     if($discipline)

        return view('discipline.edit', compact('discipline','modules'));

    else
        abort(404);
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
        $discipline = Discipline::find($id);
        $discipline ->name = $request->input('name');
        $discipline ->modules_id = $request->input('namemodule');
        $discipline ->save();
        return redirect(route('discipline.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discipline = Discipline::find($id);
        $discipline->delete();
        return redirect(route('discipline.index'));
    }
}
