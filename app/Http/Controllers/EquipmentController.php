<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    // GET /api/equipments
    public function index()
    {
        return Equipment::all();
    }

    // POST /api/equipments
    public function store(Request $request)
    {
        $equipment = Equipment::create($request->all());
        return response()->json($equipment, 201);
    }

    // GET /api/equipments/{id}
    public function show($id)
    {
        return Equipment::findOrFail($id);
    }

    // PUT /api/equipments/{id}
    public function update(Request $request, $id)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->update($request->all());

        return response()->json($equipment);
    }

    // DELETE /api/equipments/{id}
    public function destroy($id)
    {
        Equipment::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
