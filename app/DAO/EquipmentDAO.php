<?php

namespace App\DAO;

use App\Models\Equipment;

class EquipmentDAO
{

    public function getAll()
    {
        return Equipment::all();
    }

    public function create(array $data)
    {
        return Equipment::create($data);
    }

    public function findById($id)
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
