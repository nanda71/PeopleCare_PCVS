<?php

namespace App\Http\Controllers;

use App\Models\vaccines;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = vaccines::latest()->paginate(5);
        return view('vaccines.index',compact('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaccines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        vaccines::create($request->all());

        return redirect()->route('vaccines.index')->with('success','vaccines successfully registered.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function show(vaccines $vaccines)
    {
        return view('vaccines.show',compact('vaccines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function edit(vaccines $vaccines)
    {
        return view('vaccines.edit',compact('vaccines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vaccines $vaccines)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $vaccines->update($request->all());
        return redirect()->route('vaccines.index')->with('success','vaccines is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function destroy(vaccines $vaccines)
    {
        $vaccines->delete();
        return redirect()->route('vaccines.index')->with('Success','vaccines is successfully deleted');
    }
}
