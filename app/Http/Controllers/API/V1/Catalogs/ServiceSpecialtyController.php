<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\ServiceSpecialty\ServiceSpecialtyRequest;
use App\Http\Resources\API\V1\Catalogs\ServiceSpecialty\ServiceSpecialtyResource;
use App\Models\ServicesHasSpecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceSpecialtyController extends Controller
{
    public function index()
    {
        $serviceSpecialty = ServicesHasSpecialties::all();
        return ServiceSpecialtyResource::collection($serviceSpecialty);
    }

    public function store(ServiceSpecialtyRequest $request)
    {
        try {
            DB::beginTransaction();
            //return $request->validated();
            $diseaseSpecialty = ServicesHasSpecialties::create([
                'service_id' => $request->service_id,
                'specialty_id' => $request->specialty_id
            ]);
            DB::commit();
            return (new ServiceSpecialtyResource($diseaseSpecialty))->additional(['message' => 'Especialidad y enfermedad relacionada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(ServiceSpecialtyRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $serviceSpecialty = ServicesHasSpecialties::where('id', $id)->first();
            $serviceSpecialty->update([
                'service_id' => $request->service_id,
                'specialty_id' => $request->specialty_id
            ]);
            DB::commit();
            return (new ServiceSpecialtyResource($serviceSpecialty))->additional(['message' => 'Especialidad y enfermedad actualizada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $diseaseSpecialty = ServicesHasSpecialties::where('id', $id)->firstorFail();
            $diseaseSpecialty->delete();
            DB::commit();
            return (new ServiceSpecialtyResource($diseaseSpecialty))->additional(['message' => 'Especialidad y enfermedad eliminada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }
}
