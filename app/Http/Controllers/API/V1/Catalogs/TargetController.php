<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\Target\TargetRequest;
use App\Http\Resources\API\V1\Catalogs\Target\TargetResource;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TargetController extends Controller
{
    public function index()
    {
        $targets = Target::all();
        return (TargetResource::collection($targets))->additional(['message' => 'Target encontrados']);
    }

    public function store(TargetRequest $request)
    {
        try {
            DB::beginTransaction();
            $target = Target::create($request->validated());
            DB::commit();
            return (new TargetResource($target))->additional(['message' => 'Target agregado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(TargetRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $target = Target::where('id', $id)->firstOrFail();
            $target->update($request->validated());
            DB::commit();
            return (new TargetResource($target))->additional(['message' => 'Target actualizado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $target = Target::where('id', $id)->firstOrFail();
            $target->delete();
            DB::commit();
            return (new TargetResource($target))->additional(['message' => 'Target eliminado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }
}
