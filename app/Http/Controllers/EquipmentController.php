<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EquipmentService;

class EquipmentController extends Controller
{
    private $equipmentService;

    public function __construct(EquipmentService $equipmentService)
    {
        $this->equipmentService = $equipmentService;
    }

    // GET /api/equipments
    public function index()
    {
        return response()->json(
            $this->equipmentService->getAll()
        );
    }

    // POST /api/equipments
    public function store(Request $request)
    {
        $equipment = $this->equipmentService->create($request->all());

        return response()->json($equipment, 201);
    }

    // GET /api/equipments/{id}
    public function show($id)
    {
        return response()->json(
            $this->equipmentService->getById($id)
        );
    }

    // PUT /api/equipments/{id}
    public function update(Request $request, $id)
    {
        $equipment = $this->equipmentService->update($id, $request->all());

        return response()->json($equipment);
    }

    // DELETE /api/equipments/{id}
    public function destroy($id)
    {
        $this->equipmentService->delete($id);

        return response()->json([
            'message' => 'Deleted successfully'
        ]);
    }
}
