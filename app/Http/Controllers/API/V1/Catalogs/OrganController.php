<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Organ;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganController extends Controller
{
    protected $root;

    public function __construct()
    {
        $this->middleware('role:Root')->only([
            'store',
            'show',
            'update',
        ]);
        $this->root = empty(auth()->id()) ? null : User::where('id', auth()->id())->firstOrFail();
    }
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            
            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json(['Petición incorrecta' => $th->getMessage()], 400);
        }
    }

    public function show()
    {
        
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
