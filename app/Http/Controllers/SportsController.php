<?php

namespace App\Http\Controllers;

use App\Http\Requests\SportsStoreRequest;
use App\Http\Requests\SportUpdateRequest;
use App\Models\Block;
use App\Models\Equipment;
use App\Models\Schedule;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index()
    {

        $blocks = Block::all();
        $equipment = Equipment::all();
        $sports = Sport::all();

        return view('sport.index', compact('sports', 'blocks', 'equipment'));
    }

    public function create()
    {
        $equipments = Equipment::all();
        $blocks = Block::all();
        $sports = Sport::all();
        return view('sport.create', compact('sports', 'blocks', 'equipments'));
    }

    public function store(SportsStoreRequest $request)
    {

        Sport::create($request->all());
        return redirect()->route('sports.index');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $sport = Sport::all();
        $equipments = Equipment::all();
        $blocks = Block::all();
        if (!$sport = Sport::find($id))
            return redirect()->route('sports.index');

        return view('sport.edit', compact('equipments', 'blocks', 'sport'));
    }

    public function update(SportUpdateRequest $request, Sport $sport)
    {
        $sport->update($request->validated());

        return redirect()->route('sports.index');
    }

    public function destroy(Sport $sport)
    {

        $sport->delete();
        return redirect()->route('sports.index');
    }
}
