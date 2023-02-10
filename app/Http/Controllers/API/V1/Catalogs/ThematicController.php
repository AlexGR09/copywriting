<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\Thematic\ThematicRequest;
use App\Http\Resources\API\V1\Catalogs\Thematic\ThematicResource;
use App\Models\Thematic;
use Illuminate\Support\Facades\DB;

class ThematicController extends Controller
{
    public function index()
    {
        $thematics = Thematic::all();
        return (ThematicResource::collection($thematics))->additional(['message' => 'Tematicas encontradas']);
    }

    public function store(ThematicRequest $request)
    {
        try {
            DB::beginTransaction();
            $thematic = Thematic::create($request->validated());
            DB::commit();
            return (new ThematicResource($thematic))->additional(['message' => 'Tematica agregada correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(ThematicRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $thematic = Thematic::where('id', $id)->firstOrFail();
            $thematic->update($request->validated());
            DB::commit();
            return (new ThematicResource($thematic))->additional(['message' => 'Tematica actualizado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $thematic = Thematic::where('id', $id)->firstOrFail();
            $thematic->delete();
            DB::commit();
            return (new ThematicResource($thematic))->additional(['message' => 'Tematica eliminado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }
}
