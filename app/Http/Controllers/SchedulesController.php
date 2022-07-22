<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchedulesStoreRequest;
use App\Models\Block;
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


        $schedules = Schedule::get();
        return view('schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Block $blocks)
    {
        $blocks = Block::all();
        return view('schedule.create', compact('blocks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(SchedulesStoreRequest $request)
    {
        $blocks = Block::all();
        Schedule::create($request->all());
        $schedules = Schedule::get();
        return redirect()->route('schedules.index', compact('schedules', 'blocks'));
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
        $blocks = Block::all();
        if (!$schedule = Schedule::find($id))
            return redirect()->route('schedules.index');

        return view('schedule.edit', compact('schedule', 'blocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SchedulesStoreRequest $request, Schedule $schedule)
    {
        $blocks = Block::all();
        $schedule->update($request->validated());
        return redirect()->route('schedules.index', compact('blocks'));
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
