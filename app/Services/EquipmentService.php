<?php
namespace App\Services;

use App\Models\Equipment;

class EquipmentService
{
    public function getAll()
    {
        return Equipment::all();
    }

    public function create(array $data)
    {
        return Equipment::create($data);
    }

    public function getById($id)
    {
        return Equipment::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->update($data);

        return $equipment;
    }

    public function delete($id)
    {
        return Equipment::destroy($id);
    }
}
