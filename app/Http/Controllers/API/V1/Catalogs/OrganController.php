<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\Organ\OrganRequest;
use App\Http\Resources\API\V1\Catalogs\Organ\OrganResource;
use App\Models\Organ;
use Illuminate\Support\Facades\DB;

class OrganController extends Controller
{
    public function index()
    {
        $organs = Organ::all();
        return (OrganResource::collection($organs))->additional(['message' => 'Organos encontrados']);
    }

    public function store(OrganRequest $request)
    {
        try {
            DB::beginTransaction();
            $organs = Organ::create($request->validated());
            DB::commit();
            return (new OrganResource($organs))->additional(['message' => 'Registro agregado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function show()
    {
        //
    }

    public function update(OrganRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $organs = Organ::where('id', $id)->firstOrFail();
            $organs->update($request->validated());
            DB::commit();
            return (new OrganResource($organs))->additional(['message' => 'Registro actualizado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $organs = Organ::where('id', $id)->firstOrFail();
            $organs->delete();
            DB::commit();
            return (new OrganResource($organs))->additional(['message' => 'Registro eliminado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }
}
