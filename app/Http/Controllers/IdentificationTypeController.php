<?php

namespace App\Http\Controllers;

use App\IdentificationType;
use Illuminate\Http\Request;

class IdentificationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identification_types=IdentificationType::get();
        return view('admin.identificationType.index',compact('identification_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.identificationType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        IdentificationType::create($request->all());
        return redirect()->route('identification_types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function show(IdentificationType $identificationType)
    {
        return view('admin.identificationType.show',compact('identificationType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function edit(IdentificationType $identificationType)
    {
        return view('admin.identificationType.show',compact('identificationType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IdentificationType $identificationType)
    {
        $identificationType->update($request->all());
        return redirect()->route('identification_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(IdentificationType $identificationType)
    {
        $identificationType->delete();
        return redirect()->route('identification_types.index');
    }
}
