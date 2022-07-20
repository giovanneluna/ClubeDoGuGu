<?php

namespace App\Http\Controllers;

use App\Http\Requests\SportsStoreRequest;
use App\Models\Block;
use App\Models\Equipment;
use App\Models\Schedule;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blocks = Block::all();
        $equipment = Equipment::all();
        $sports = Sport::all();
        return view('sport.index', compact('sports', 'blocks', 'equipment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipments = Equipment::all();
        $blocks = Block::all();
        $sports = Sport::all();
        return view('sport.create', compact('sports', 'blocks', 'equipments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SportsStoreRequest $request)
    {

        Sport::create($request->all());
        return redirect()->route('sports.index');
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
        $sport = Sport::all();
        $equipments = Equipment::all();
        $blocks = Block::all();
        if (!$sport = Sport::find($id))
            return redirect()->route('sports.index');

        return view('sport.edit', compact('equipments', 'blocks', 'sport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SportsController $request, Sport $sport)
    {
        $equipments = Equipment::all();
        $blocks = Block::all();
        $sports = Sport::all();
        $sport->update($request->validated());
        return redirect()->route('sports.index', compact('blocks', 'equipments', 'sports'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
