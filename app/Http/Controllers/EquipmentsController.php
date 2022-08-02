<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlockUpdateRequest;
use App\Http\Requests\EquipmentsStoreRequest;
use App\Http\Requests\EquipmentsUpdateRequest;
use App\Http\Requests\EquipmentUpdateRequest;
use App\Models\Equipment;
use App\Models\EquipmentType;
use App\Models\EquipmentUse;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index()
    {
        $equipment_types = EquipmentType::all();
        $equipments = Equipment::all();
        return view('equipment.index', compact('equipments', 'equipment_types'));
    }

    public function create()
    {
        $equipment_types = EquipmentType::all();
        $equipments = Equipment::all();
        return view('equipment.create', compact('equipments', 'equipment_types'));
    }

    public function store(EquipmentsStoreRequest $request)
    {
        $equipment =  Equipment::create($request->validated());
        return redirect()->route('equipments.index');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $equipment_types = EquipmentType::all();
        if (!$equipment = Equipment::find($id))
            return redirect()->route('equipments.index');

        return view('equipment.edit', compact('equipment', 'equipment_types'));
    }

    public function update(EquipmentUpdateRequest $request, Equipment $equipment)
    {
        $equipment->update($request->validated());
        return redirect()->route('equipments.index');
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('equipments.index');
    }
}
