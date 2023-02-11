<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

global $catalog;

$this->catalogs = 'App\\Http\\Controllers\\API\\V1\\Catalogs\\';

/* Route::middleware('auth:jwt')->get('/user', function (Request $request) {
    return $request->user();
}); */
Route::prefix('/catalogues')->group(function () {
    //RUTAS PARA EL CATALOGO DE PAISES
    Route::controller($this->catalogs . CountryController::class)->group(function () {
        Route::get('/countries', 'index');
        Route::post('/country', 'store');
        Route::put('/country/{id}', 'update');
        Route::delete('/country/{id}', 'destroy');
    });
    //RUTAS PARA EL CATAOLOGO DE ESTADOS
    Route::controller($this->catalogs . StateController::class)->group(function () {
        Route::get('/states', 'index');
        Route::post('/state', 'store');
        Route::put('/state/{id}', 'update');
        Route::delete('/state/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE CIUDADES
    Route::controller($this->catalogs . CityController::class)->group(function () {
        Route::get('/cities', 'index');
        Route::post('/city', 'store');
        Route::put('/city/{id}', 'update');
        Route::delete('/city/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE ORGANOS
    Route::controller($this->catalogs . OrganController::class)->group(function () {
        Route::get('/organs', 'index');
        Route::post('/organ', 'store');
        Route::put('/organ/{id}', 'update');
        Route::delete('/organ/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE ENFERMEDADES
    Route::controller($this->catalogs . DiseaseController::class)->group(function () {
        Route::get('/diseases', 'index');
        Route::post('/disease', 'store');
        Route::put('/disease/{id}', 'update');
        Route::delete('/disease/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE OBJETIVOS
    Route::controller($this->catalogs . ObjectiveController::class)->group(function () {
        Route::get('/objects', 'index');
        Route::post('/object', 'store');
        Route::put('/object/{id}', 'update');
        Route::delete('/object/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE ESPECIALIDADES
    Route::controller($this->catalogs . SpecialtyController::class)->group(function () {
        Route::get('/specialties', 'index');
        Route::post('/specialty', 'store');
        Route::put('/specialty/{id}', 'update');
        Route::delete('/specialty/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE SUBOBJETIVOS
    Route::controller($this->catalogs . SubObjetiveController::class)->group(function () {
        Route::get('/sub-objetives', 'index');
        Route::post('/sub-objetive', 'store');
        Route::put('/sub-objetive/{id}', 'update');
        Route::delete('/sub-objetive/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE SINTOMAS
    Route::controller($this->catalogs . SymptomController::class)->group(function () {
        Route::get('/symptoms', 'index');
        Route::post('/symptom', 'store');
        Route::put('/symptom/{id}', 'update');
        Route::delete('/symptom/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE TARGET
    Route::controller($this->catalogs . TargetController::class)->group(function () {
        Route::get('/targets', 'index');
        Route::post('/target', 'store');
        Route::put('/target/{id}', 'update');
        Route::delete('/target/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE TEMATICAS
    Route::controller($this->catalogs . ThematicController::class)->group(function () {
        Route::get('/thematics', 'index');
        Route::post('/thematic', 'store');
        Route::put('/thematic/{id}', 'update');
        Route::delete('/thematic/{id}', 'destroy');
    });
    //RUTAS PARA EL CATALOGO DE SERVICIOS
    Route::controller($this->catalogs . ServiceController::class)->group(function () {
        Route::get('/services', 'index');
        Route::post('/service', 'store');
        Route::put('/service/{id}', 'update');
        Route::delete('/service/{id}', 'destroy');
    });
    Route::controller($this->catalogs . DiseasesSpecialtiesController::class)->group(function () {
        Route::get('/diseases-specialties', 'index');
        /* Route::post('/service', 'store');
        Route::put('/service/{id}', 'update');
        Route::delete('/service/{id}', 'destroy'); */
    });

});
