<?php

namespace App\Http\Controllers;

use App\Models\Assign;
use App\Models\Discipline;
use App\Models\Professor;
use Illuminate\Http\Request;

class AssignCtr extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $assigns= Assign::all();
        return view('assign.index')->with('assigns', $assigns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professors = Professor::all();
        $disciplines = Discipline::all();
        return view('assign.create', compact('professors','disciplines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assign = new Assign();
        $assign -> professor_id = $request->input('professor');
        $assign -> discipline_id = $request->input('discipline');
        $assign ->save();
        return redirect(route('assign.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assign = Assign::find($id);

        if($assign)
            return view('assign.show')->with('assign', $assign);
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
        $assign= Assign::find($id);
        $professors = Professor:: all();
        $disciplines = Discipline::all();

     if($assign)

        return view('assign.edit', compact('assign','professors','disciplines'));

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
        $assign = Assign::find($id);
        $assign -> professor_id = $request->input('professor');
        $assign -> discipline_id = $request->input('discipline');
        $assign ->save();
        return redirect(route('assign.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assign = Assign::find($id);
        $assign->delete();
        return redirect(route('assign.index'));
    }
}
