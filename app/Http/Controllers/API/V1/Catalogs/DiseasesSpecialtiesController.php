<?php

namespace App\Http\Controllers\API\V1\Catalogs;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\V1\Catalogs\DiseaseSpecialty\DiseaseSpecialtyResource;
use App\Models\DiseasesHasSpecialties;
use Illuminate\Http\Request;

class DiseasesSpecialtiesController extends Controller
{
    public function index()
    {
        $diseaseSpecialty = DiseasesHasSpecialties::all();
        return DiseaseSpecialtyResource::collection($diseaseSpecialty);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
