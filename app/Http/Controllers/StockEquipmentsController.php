<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipmentStockStore;
use App\Models\Equipment;
use App\Models\EquipmentStock;
use Illuminate\Http\Request;

class StockEquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipment::all();
        $stock_equips = EquipmentStock::all();
        return view('stock.index', compact('stock_equips', 'equipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipments = Equipment::all();
        return view('stock.create', compact('equipments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipmentStockStore $request)
    {

        EquipmentStock::create($request->validated());
        return redirect('equipment-stocks.index');
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
    public function edit(EquipmentStock $equipmentStock)
    {
        $equipments = Equipment::all();
        return view('stock.edit', compact('equipmentStock', 'equipments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipmentStockStore $request, EquipmentStock $equipmentStock)
    {
        $equipmentStock->update($request->validated());
        return redirect('equipment-stocks.index');
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
