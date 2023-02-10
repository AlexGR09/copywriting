<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\Objective\ObjectiveRequest;
use App\Http\Resources\API\V1\Catalogs\Objective\ObjectiveResource;
use App\Models\Objective;
use Illuminate\Support\Facades\DB;

class ObjectiveController extends Controller
{
    public function index()
    {
        $objectives = Objective::all();
        return (ObjectiveResource::collection($objectives))->additional(['message' => 'Objetivos encontrados']);
    }

    public function store(ObjectiveRequest $request)
    {
        try {
            DB::beginTransaction();
            $disease = Objective::create($request->validated());
            DB::commit();
            return (new ObjectiveResource($disease))->additional(['message' => 'Obejetivo agregado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(ObjectiveRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $disease = Objective::where('id', $id)->firstOrFail();
            $disease->update($request->validated());
            DB::commit();
            return (new ObjectiveResource($disease))->additional(['message' => 'Obejetivo actualizado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $disease = Objective::where('id', $id)->firstOrFail();
            $disease->delete();
            DB::commit();
            return (new ObjectiveResource($disease))->additional(['message' => 'Obejetivo eliminado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }
}
