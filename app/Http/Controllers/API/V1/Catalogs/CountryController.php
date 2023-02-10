<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\Country\CountryRequest;
use App\Http\Resources\API\V1\Catalogs\Country\CountryResource;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $country = Country::all();
        return (CountryResource::collection($country))->additional(['message' => 'Paises encontrados']);
    }

    public function store(CountryRequest $request)
    {
        try {
            DB::beginTransaction();
            $country = Country::create($request->validated());
            DB::commit();
            return (new CountryResource($country))->additional(['message' => 'Pais agregado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(CountryRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $country = Country::where('id', $id)->firstOrFail();
            $country->update($request->validated());
            DB::commit();
            return (new CountryResource($country))->additional(['message' => 'Pais actualizado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $country = Country::where('id', $id)->firstOrFail();
            $country->delete();
            DB::commit();
            return (new CountryResource($country))->additional(['message' => 'Pais eliminado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }
}
