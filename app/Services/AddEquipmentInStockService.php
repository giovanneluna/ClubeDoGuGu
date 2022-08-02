<?php

namespace App\Services;

use App\Models\Equipment;

class AddEquipmentInStockService
{
    public function run($equipmentId, $quantity)
    {
        dd($equipmentId);
        $equipment = Equipment::find($equipmentId);
        $equipmentStock = $equipment->equipment_stock;
        $equipmentStock->update(['quantity' => $equipmentStock->quantity + $quantity]);
    }
}
