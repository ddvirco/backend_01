<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Beer::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Beer::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  init $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Beer::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  init $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $beer = Beer::find($id);
        $beer->update($request->all());
        return $beer;   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  init $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Beer::destroy($id);
    }
}
