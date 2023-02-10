<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\SubObjective\SubObjectiveRequest;
use App\Http\Resources\API\V1\Catalogs\SubObjective\SubObjectiveResource;
use App\Models\SubObjective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubObjetiveController extends Controller
{
    public function index()
    {
        $subobjecives = SubObjective::all();
        return SubObjectiveResource::collection($subobjecives);
    }

    public function store(SubObjectiveRequest $request)
    {
        try {
            DB::beginTransaction();
            $specialty = SubObjective::create($request->validated());
            DB::commit();
            return (new SubObjectiveResource($specialty))->additional(['message' => 'Sub-objetivo agregado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(SubObjectiveRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $subobjecives = SubObjective::where('id',$id)->firstOrFail();
            $subobjecives->update($request->validated());
            DB::commit();
            return (new SubObjectiveResource($subobjecives))->additional(['message' => 'Sub-objetivo actualizado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $subobjecives = SubObjective::where('id',$id)->firstOrFail();
            $subobjecives->delete();
            DB::commit();
            return (new SubObjectiveResource($subobjecives))->additional(['message' => 'Sub-objetivo eliminado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }
}
