<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\DiseaseSpeciaty\DiseaseSpecialtyRequest;
use App\Http\Resources\API\V1\Catalogs\DiseaseSpecialty\DiseaseSpecialtyResource;
use App\Models\DiseasesHasSpecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiseasesSpecialtiesController extends Controller
{
    public function index()
    {
        $diseaseSpecialty = DiseasesHasSpecialties::all();
        return DiseaseSpecialtyResource::collection($diseaseSpecialty);
    }

    public function store(DiseaseSpecialtyRequest $request)
    {
        try {
            DB::beginTransaction();
            $diseaseSpecialty = DiseasesHasSpecialties::create([
                'disease_id' => $request->disease_id,
                'specialty_id' => $request->specialty_id
            ]);
            DB::commit();
            return (new DiseaseSpecialtyResource($diseaseSpecialty))->additional(['message' => 'Especialidad y enfermedad relacionada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(DiseaseSpecialtyRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $diseaseSpecialty = DiseasesHasSpecialties::where('id',$id)->firstOrFail();
            $diseaseSpecialty->update([
                'disease_id' => $request->disease_id,
                'specialty_id' => $request->specialty_id
            ]);
            DB::commit();
            return (new DiseaseSpecialtyResource($diseaseSpecialty))->additional(['message' => 'Especialidad y enfermedad actualizada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $diseaseSpecialty = DiseasesHasSpecialties::where('id',$id)->firstOrFail();
            $diseaseSpecialty->delete();
            DB::commit();
            return (new DiseaseSpecialtyResource($diseaseSpecialty))->additional(['message' => 'Especialidad y enfermedad eliminada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }
}
