<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//se carga directamente el login
Route::get('/', function () {
    return view('auth/login');
});






/*
|--------------------------------------------------------------------------
|                      Grupos de Rutas  notificaciones
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/crear', [App\Http\Controllers\notiController::class, 'index'])->name('crear');
    Route::post('/save-token', [App\Http\Controllers\notiController::class, 'saveToken'])->name('save-token');
    Route::post('/send-notification', [App\Http\Controllers\notiController::class, 'sendNotification'])->name('send.notification');
});

/*
|--------------------------------------------------------------------------
|                    Grupos de Rutas  inicio de session Redes Sociales
|--------------------------------------------------------------------------
*/
//facebook
Route::get('auth/facebook',[\App\Http\Controllers\SocialController::class,'redirectFacebook']);
Route::get('auth/facebook/callback',[\App\Http\Controllers\SocialController::class,'callbackFacebook']);
//google
Route::get('auth/google',[\App\Http\Controllers\GoogleSocialController::class,'redirectGoogle']);
Route::get('auth/google/callback',[\App\Http\Controllers\GoogleSocialController::class,'callbackGoogle']);








//segun el rol de usuario se direcciona al panel correspondiente
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    route::get('redirects',[App\Http\Controllers\HomeController::class,'index']);
});

/*
|--------------------------------------------------------------------------
|                    Grupos de Rutas  Panel Administrativo
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    //tipo series
    Route::get('panel/configuraciones/tipo-serie/show', \App\Http\Livewire\Panel\Configuraciones\TipoSerie\Show::Class)->name('tipo-serie.show');
    //clubes
    Route::get('panel/configuraciones/club/show', \App\Http\Livewire\Panel\Configuraciones\Club\Show::class)->name('club.show');
    //clubes
    Route::get('panel/configuraciones/serie/show',\App\Http\Livewire\Panel\Configuraciones\Serie\Show::class)->name('serie.show');
    //status
    Route::get('panel/configuraciones/status/show',\App\Http\Livewire\Panel\Configuraciones\Status\Show::class)->name('status.show');
    //fechas
    Route::get('panel/configuraciones/fechas/show',\App\Http\Livewire\Panel\Configuraciones\Fechas\Show::class)->name('fechas.show');
    //temporadas
    Route::get('panel/configuraciones/temporadas/show',\App\Http\Livewire\Panel\Configuraciones\Temporadas\Show::class)->name('temporadas.show');
    //fixture
    Route::get('panel/configuraciones/fixture/show',\App\Http\Livewire\Panel\Configuraciones\Fixture\Show::class)->name('fixture.show');
    //resultados
    Route::get('panel/configuraciones/resultados/show',\App\Http\Livewire\Panel\Configuraciones\Resultados\Show::class)->name('resultados.show');
});

/*
|--------------------------------------------------------------------------
|                    Grupos de Rutas  Para Usuario Publicos
|--------------------------------------------------------------------------
*/



Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/fixture', function () {
        return view('fixture');
    });

    Route::get('/resultados', function () {
        return view('resultados');
    });



    //resultados
    Route::get('show-resultados',\App\Http\Livewire\ShowResultados::class)->name('show-resultados');
    //Fixure
    Route::get('show-fixure',\App\Http\Livewire\ShowFixure::class)->name('show-fixure');

    //Historial resultados
     Route::get('historial/{fechas_id}',\App\Http\Livewire\Historial::class)->name('historial');


});


/*
|--------------------------------------------------------------------------
|                    Grupos de Rutas  roles permisos
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
});



