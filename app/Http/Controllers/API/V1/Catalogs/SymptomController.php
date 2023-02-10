<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\Symptom\SymptomRequest;
use App\Http\Resources\API\V1\Catalogs\Symptom\SymptomResource;
use App\Models\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SymptomController extends Controller
{
    public function index()
    {
        $symptoms = Symptom::all();
        return (SymptomResource::collection($symptoms))->additional(['message'=>'Sintomas encontrados']);
    }

    public function store(SymptomRequest $request)
    {
        try {
            DB::beginTransaction();
            $symptom = Symptom::create($request->validated());
            DB::commit();
            return (new SymptomResource($symptom))->additional(['message' => 'Sintoma agregado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(SymptomRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $symptom = Symptom::where('id', $id)->firstOrFail();
            $symptom->update($request->validated());
            DB::commit();
            return (new SymptomResource($symptom))->additional(['message' => 'Sintoma actualizado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $symptom = Symptom::where('id', $id)->firstOrFail();
            $symptom->delete();
            DB::commit();
            return (new SymptomResource($symptom))->additional(['message' => 'Sintoma eliminado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }
}
