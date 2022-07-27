<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchedulesStoreRequest;
use App\Http\Requests\SchedulesUpdateRequest;
use App\Http\Requests\ScheduleUpdateRequest;
use App\Models\Block;
use App\Models\Client;
use App\Models\Schedule;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $client = Client::get();
        $schedules = Schedule::get();
        return view('schedule.index', compact('schedules', 'client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Block $block)
    {
        $clients = Client::all();
        $blocks = Block::all();

        return view('schedule.create', compact('blocks', 'clients', 'block'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(SchedulesStoreRequest $request)
    {
        $clients = Client::all();
        $blocks = Block::all();
        Schedule::create($request->all());
        $schedules = Schedule::get();
        return redirect()->route('schedules.index', compact('schedules', 'blocks', 'clients'));
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
        $clients = Client::all();
        $blocks = Block::all();
        if (!$schedule = Schedule::find($id))
            return redirect()->route('schedules.index');

        return view('schedule.edit', compact('schedule', 'blocks', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ScheduleUpdateRequest $request, Schedule $schedule)
    {
        $clients = Client::all();
        $blocks = Block::all();
        $schedule->update($request->validated());
        return redirect()->route('schedules.index', compact('blocks', 'clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index');
    }
}
