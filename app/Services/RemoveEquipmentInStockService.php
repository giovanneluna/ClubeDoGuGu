<?php

namespace App\Services;

use App\Models\Equipment;

class RemoveEquipmentInStockService
{
    public function run($equipmentId, $quantity)
    {
        $equipment = Equipment::find($equipmentId);
        $equipmentStock = $equipment->equipment_stock;

        $newQuantity =  $equipmentStock->quantity - $quantity;

        if ($newQuantity < 0) {

            return false;
        }
        $equipmentStock->update(['quantity' => $newQuantity]);
        return true;
    }
}
