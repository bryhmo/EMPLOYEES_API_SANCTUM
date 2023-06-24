<?php
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Validation\ValidationException;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

// Route::resource("/employees", EmployeeController::class);
// Route::post("/index",[EmployeeController::class,"index"]);


//Route::post('/searchrecord/{name}',[EmployController::class,'SearchRecord']);
//->middleware('web');


Route::middleware(['api'])->group(function () {
   
    
});


Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/getusers',[EmployController::class,'ViewData']);
    Route::post('/addrecord',[EmployController::class,'AddData']);
    Route::put('/update',[EmployController::class,'Update']);
    Route::delete('/deleterecord/{id}',[EmployController::class,'DeleteData']);
    Route::get('/searchrecord/{name}',[EmployController::class,'SearchRecord']);
    Route::get('/searchrecordwithcharacter/{name}',[EmployController::class,'SearchRecordWithCharacter']);
});



Route::post("login",[UsersController::class,'LoginTo']);





