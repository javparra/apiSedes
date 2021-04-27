<?php

namespace App\Http\Controllers;

use App\Models\Heading;
use Illuminate\Http\Request;

class HeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Heading::all()->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Heading::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function show(Heading $heading)
    {
        $heading = Heading::find($heading);
        return $heading->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heading $heading)
    {
        $heading = Heading::find($heading->id);
        $heading->update($request->all());
        return $heading->json_encode;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heading $heading)
    {
        return Heading::destroy($heading->id);
    }
}
