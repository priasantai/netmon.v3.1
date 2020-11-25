<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fo;
class FoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('fo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('foadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        fo::create([
            'ont'=>$request->ont,
            'alamat'=>$request->alamat,
        ]);
        return redirect('fo')->with('success', 'Ont Added Successfully!');
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
        $foedits = fo::findorfail($id);
        return view ('foedit',compact('foedits'));
        
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
        $foedits = fo::findorfail($id);
        $foedits->update($request->all());
        return redirect('fo')->with('success', 'Ont Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foedits = fo::findorfail($id);
        $foedits->delete();
        return back()->with('success', 'Ont Deleted Successfully!');
    }
}
