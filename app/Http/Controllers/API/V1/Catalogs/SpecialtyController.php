<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\Specialty\SpecialtyRequest;
use App\Http\Resources\API\V1\Catalogs\Specialty\SpecialtyResource;
use App\Models\Specialty;
use Illuminate\Support\Facades\DB;

class SpecialtyController extends Controller
{
    public function index()
    {
        $specialties = Specialty::all();
        return (SpecialtyResource::collection($specialties))->additional(['message' => 'Especialidades encontradas']);
    }

    public function store(SpecialtyRequest $request)
    {
        try {
            DB::beginTransaction();
            $specialty = Specialty::create($request->validated());
            DB::commit();
            return (new SpecialtyResource($specialty))->additional(['message' => 'Especialidad agregada correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(SpecialtyRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $specialty = Specialty::where('id',$id)->firstOrFail();
            $specialty->update($request->validated());
            DB::commit();
            return (new SpecialtyResource($specialty))->additional(['message' => 'Especialidad actualizada correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $specialty = Specialty::where('id',$id)->firstOrFail();
            $specialty->delete();
            DB::commit();
            return (new SpecialtyResource($specialty))->additional(['message' => 'Especialidad eliminada correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }
}
