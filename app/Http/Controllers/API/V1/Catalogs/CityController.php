<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\City\CityRequest;
use App\Http\Resources\API\V1\Catalogs\City\CityResource;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return (CityResource::collection($cities))->additional(['message' => 'Ciudades encontradas']);
    }

    public function store(CityRequest $request)
    {
        try {
            DB::beginTransaction();
            $country = City::create($request->validated());
            DB::commit();
            return (new CityResource($country))->additional(['message' => 'Ciudad agregado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }
    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $country = City::where('id', $id)->firstOrFail();
            $country->update($request->validated());
            DB::commit();
            return (new CityResource($country))->additional(['message' => 'Ciudad actualizada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $country = City::where('id', $id)->firstOrFail();
            $country->delete();
            DB::commit();
            return (new CityResource($country))->additional(['message' => 'Ciudad eliminada correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }
}
