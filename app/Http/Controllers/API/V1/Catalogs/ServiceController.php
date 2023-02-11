<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\Service\ServiceRequest;
use App\Http\Resources\API\V1\Catalogs\Service\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return (ServiceResource::collection($services))->additional(['messages' => 'Servicios encontrados']);
    }

    
    public function store(ServiceRequest $request)
    {
        try {
            DB::beginTransaction();
            $service = Service::create($request->validated());
            DB::commit();
            return (new ServiceResource($service))->additional(['message' => 'Servicio agregado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(ServiceRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $service = Service::where('id', $id)->firstOrFail();
            $service->update($request->validated());
            DB::commit();
            return (new ServiceResource($service))->additional(['message' => 'Servicio actualizado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $service = Service::where('id', $id)->firstOrFail();
            $service->delete();
            DB::commit();
            return (new ServiceResource($service))->additional(['message' => 'Servicio eliminado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }
}
