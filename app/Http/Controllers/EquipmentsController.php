<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlockUpdateRequest;
use App\Http\Requests\EquipmentsStoreRequest;
use App\Http\Requests\EquipmentsUpdateRequest;
use App\Http\Requests\EquipmentUpdateRequest;
use App\Models\Equipment;
use App\Models\EquipmentType;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment_types = EquipmentType::all();
        $equipments = Equipment::all();
        return view('equipment.index', compact('equipments', 'equipment_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipment_types = EquipmentType::all();
        $equipments = Equipment::all();
        return view('equipment.create', compact('equipments', 'equipment_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipmentsStoreRequest $request)
    {
        $equipment =  Equipment::create($request->validated());
        return redirect()->route('equipments.index');
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
        $equipment_types = EquipmentType::all();
        if (!$equipment = Equipment::find($id))
            return redirect()->route('equipments.index');

        return view('equipment.edit', compact('equipment', 'equipment_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipmentUpdateRequest $request, Equipment $equipment)
    {
        $equipment_types = EquipmentType::all();
        $equipment->update($request->validated());
        return redirect()->route('equipments.index', 'equipment_types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('equipments.index');
    }
}
