<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipmentStockStore;
use App\Models\Equipment;
use App\Models\EquipmentStock;
use Illuminate\Http\Request;

class StockEquipmentsController extends Controller
{
    public function index()
    {
        $equipment = Equipment::all();
        $equipmentStocks = EquipmentStock::all();
        return view('stock.index', compact('equipmentStocks', 'equipment'));
    }

    public function create()
    {
        $equipments = Equipment::all();
        return view('stock.create', compact('equipments'));
    }

    public function store(EquipmentStockStore $request)
    {

        EquipmentStock::create($request->validated());
        return redirect('equipment-stocks');
    }

    public function show($id)
    {
    }

    public function edit(EquipmentStock $equipmentStock)
    {
        $equipments = Equipment::all();
        return view('stock.edit', compact('equipmentStock', 'equipments'));
    }

    public function update(EquipmentStockStore $request, EquipmentStock $equipmentStock)
    {
        $equipmentStock->update($request->validated());
        return redirect('equipment-stocks');
    }

    public function destroy(EquipmentStock $equipmentStock)
    {
        $equipmentStock->delete();
        return redirect()->route('equipment-stocks.index');
    }
}
