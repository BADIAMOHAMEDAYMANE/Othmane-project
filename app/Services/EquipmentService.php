<?php
namespace App\Services;

use App\DAO\EquipmentDAO;

class EquipmentService
{
    protected $equipmentDAO;

    public function __construct(EquipmentDAO $equipmentDAO)
    {
        $this->equipmentDAO = $equipmentDAO;
    }

    public function getAll()
    {
        return $this->equipmentDAO->getAll();
    }

    public function create(array $data)
    {
        return $this->equipmentDAO->create($data);
    }

    public function getById($id)
    {
        return $this->equipmentDAO->findById($id);
    }

    public function update($id, array $data)
    {
        return $this->equipmentDAO->update($id, $data);
    }

    public function delete($id)
    {
        return $this->equipmentDAO->delete($id);
    }
}
