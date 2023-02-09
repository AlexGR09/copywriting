<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Catalogs\OrgansRequest;
use App\Http\Resources\API\V1\Catalogs\OrgansResource;
use App\Models\Organ;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganController extends Controller
{
    // protected $root;

    // public function __construct()
    // {
    //     $this->middleware('role:Root')->only([
    //         'store',
    //         'show',
    //         'update',
    //     ]);
    //     $this->root = empty(auth()->id()) ? null : User::where('id', auth()->id())->firstOrFail();
    // }
    public function index()
    {
        //
    }

    public function store(OrgansRequest $request)
    {
        try {
            DB::beginTransaction();
            //$organs = Organ::create([$request->validated()]);
            $organs = Organ::create([
                $request
            ]);
            DB::commit();
            return (new OrgansResource($organs));
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function show()
    {
        $organs = Organ::all();
        return OrgansResource::collection($organs);
    }

    public function update(OrgansRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $organs = Organ::where('id', $id)->firstOrFail();
            $organs->name = $request->name;
            DB::commit();
            return (new OrgansResource($organs));
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        //
    }
}
