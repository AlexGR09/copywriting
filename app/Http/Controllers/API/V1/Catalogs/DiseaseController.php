<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\Disease\DiseaseRequest;
use App\Http\Resources\API\V1\Catalogs\Disease\DiseaseResource;
use App\Models\Disease;
use Illuminate\Support\Facades\DB;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = Disease::all();
        return (DiseaseResource::collection($diseases))->additional(['message' => 'Enfermedades encontradas']);
    }

    public function store(DiseaseRequest $request)
    {
        try {
            DB::beginTransaction();
            $disease = Disease::create($request->validated());
            DB::commit();
            return (new DiseaseResource($disease))->additional(['message' => 'Enfermedad agregada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(DiseaseRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $disease = Disease::where('id', $id)->firstOrFail();
            $disease->update($request->validated());
            DB::commit();
            return (new DiseaseResource($disease))->additional(['message' => 'Enfermedad actualizada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $disease = Disease::where('id', $id)->firstOrFail();
            $disease->delete();
            DB::commit();
            return (new DiseaseResource($disease))->additional(['message' => 'Enfermedad eliminada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }
}
