<?php

namespace App\Http\Controllers;

use App\Models\HealthCentre;
use Illuminate\Http\Request;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = healthCentre::latest()->paginate(5);
        return view('healthCentre.index',compact('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('healthCentre.create');
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
            'centreName' => 'required',
            'address' => 'required',
        ]);

        healthCentre::create($request->all());

        return redirect()->route('healthCentre.index')->with('success','healthCentre successfully registered.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\healthCentre  $healthCentre
     * @return \Illuminate\Http\Response
     */
    public function show(healthCentre $healthCentre)
    {
        return view('healthCentre.show',compact('healthCentre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\healthCentre  $healthCentre
     * @return \Illuminate\Http\Response
     */
    public function edit(healthCentre $healthCentre)
    {
        return view('healthCentre.edit',compact('healthCentre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\healthCentre  $healthCentre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, healthCentre $healthCentre)
    {
        $request->validate([
            'centreName' => 'required',
            'address' => 'required',
        ]);

        $healthCentre->update($request->all());
        return redirect()->route('healthCentre.index')->with('success','healthCentre is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\healthCentre  $healthCentre
     * @return \Illuminate\Http\Response
     */
    public function destroy(healthCentre $healthCentre)
    {
        $healthCentre->delete();
        return redirect()->route('healthCentre.index')->with('Success','healthCentre is successfully deleted');
    }
}
