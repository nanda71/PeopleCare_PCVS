<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\vaccines;
use App\Models\tb_admin as Admin;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = batch::latest()->paginate(5);
        return view('batch.index',compact('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function ShowBatches(Request $req){
        $batch = batch::getAllBatch();
        $data = $batch->data;
        $vaccine = vaccines::getAllVaccine();
        return view('admin.Batch',[
            "data"=>$data,
            "vaccine"=>$vaccines,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req){
        $req->merge([
            "vaccine_name"=>$req->input('vaccine_name'),
        ]);
        $validatedData = $req->validate([
            ''=>"string",
            'Pricing'=>"string",
            'Presented_Dance'=>"string",
            "Traditional_Dancer"=>"required",
        ]);
        $ifSuccess = Services::AddServices($validatedData);
        if(!$ifSuccess->success){
            return redirect()
            ->back()
            ->with('toast_error',[
                "Failed to input information"]);
        }
        return redirect('/dancer/home')
        ->with('toast_success',[
            "Input Information Success"]);
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

        batch::create($request->all());

        return redirect()->route('batch.index')->with('success','batch successfully registered.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(batch $batch)
    {
        return view('batch.show',compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(batch $batch)
    {
        return view('batch.edit',compact('batch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, batch $batch)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $batch->update($request->all());
        return redirect()->route('batch.index')->with('success','batch is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(batch $batch)
    {
        $batch->delete();
        return redirect()->route('batch.index')->with('Success','batch is successfully deleted');
    }
}
