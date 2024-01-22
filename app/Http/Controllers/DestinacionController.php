<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDestinacionRequest;
use App\Http\Requests\UpdateDestinacionRequest;
use App\Models\Destinacion;

class DestinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinacions = Destinacion::all();
        return view('destinacions.index', compact('destinacions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDestinacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $destinacions = Destinacion::find($id);

        return view('destinacions.show', compact('destinacions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinacion $destinacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinacionRequest $request, Destinacion $destinacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinacion $destinacion)
    {
        //
    }
}
