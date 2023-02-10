<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\State\StateRequest;
use App\Http\Resources\API\V1\Catalogs\State\StateResource;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class StateController extends Controller
{

    public function index()
    {
        $state = State::all();
        return (StateResource::collection($state))->additional(['message' => 'Estados encontrados']);
    }

    public function store(StateRequest $request)
    {
        try {
            DB::beginTransaction();
            $state = State::create($request->validated());
            DB::commit();
            return (new StateResource($state))->additional(['message' => 'Estado agregado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(StateRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $state = State::where('id', $id)->firstOrFail();
            $state->update($request->validated());
            DB::commit();
            return (new StateResource($state))->additional(['message' => 'Estado actualizado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $state = State::where('id', $id)->firstOrFail();
            $state->delete();
            DB::commit();
            return (new StateResource($state))->additional(['message' => 'Estado eliminado correctamente']);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage()], 503);
        }
    }
}
