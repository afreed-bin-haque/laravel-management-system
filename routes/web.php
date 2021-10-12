<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\PrisonerController;
use App\Http\Controllers\VisitorController;
use App\Models\Admin;

//email varification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/',[IndexController::class, 'index'])->name('/');
//user
Route::middleware(['auth:sanctum,web'])->get('/dashboard', function () {
    return view('user.user_main');
})->name('udashboard');


//PMS system routes
Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
    Route::get('/login',[AdminController::class,'loginForm']);
    Route::post('/login',[AdminController::class,'store'])->name('admin.login');
});
Route::middleware(['auth:sanctum,admin'])->get('/admin/dashboard', function () {
    $users= DB::table('users')->latest()->paginate(2);
    return view('admin.admin_main',compact('users'));
})->name('dashboard');

//page Controller
Route::get('/registration/policemen',[RegController::class,'ViewPoliceRegForm'])->name('reg.police');
Route::post('/save/policemen',[RegController::class,'StorPoliceForm'])->name('save.police');
Route::get('/signup/viewer',[SingUpController::class,'SignUpViewer'])->name('singup.veiwer');
Route::post('/store/visitor',[SingUpController::class,'StoreVisitor'])->name('store.visitor');
Route::get('/registration/prisoner',[PrisonerController::class,'ViewPrisonForm'])->name('reg.prisoner');
Route::post('/save/prisoner',[PrisonerController::class,'SavePrisoner'])->name('save.prisoner');
Route::get('/user/delete/{id}',[SingUpController::class,'delete']);
Route::get('/registration/crime',[RegController::class,'ViewCrimeForm'])->name('reg.crime');
Route::post('/save/crime',[RegController::class,'StoreCrime'])->name('save.crime');
Route::get('/registration/health',[RegController::class,'ViewHealthForm'])->name('reg.health');
Route::post('/save/hospital',[RegController::class,'StoreHealth'])->name('save.hospital');
Route::get('/set/parole',[RegController::class,'ViewParoleForm'])->name('set.parole');
Route::post('/save/parole',[RegController::class,'StoreParole'])->name('save.parole');
//view-update-delete
Route::get('/table/police',[RegController::class,'PoliceTable'])->name('table.police');
Route::get('/police/view/{id}',[RegController::class,'ViewPolice']);
Route::post('/police/update/{id}',[RegController::class,'UpdatePolice']);
Route::get('/police/delete/{id}',[RegController::class,'DeletePolice']);
Route::get('/table/visiotr',[VisitorController::class,'VisitorTable'])->name('table.visitor');
Route::get('/table/presoner',[PrisonerController::class,'PrisonerTable'])->name('table.presoner');
Route::get('/vistor/view/{id}',[VisitorController::class,'View']);
Route::get('/prisoner/view/{id}',[PrisonerController::class,'View']);
Route::post('/visitor/update/{id}',[VisitorController::class,'Update']);
Route::get('/vistor/delete/{id}',[VisitorController::class,'Delete']);
Route::get('/prisoner/delete/{id}',[PrisonerController::class,'Delete']);
Route::post('/prisoner/update/{id}',[PrisonerController::class,'Update']);
Route::get('/table/health',[RegController::class,'HealthTable'])->name('table.health');
Route::get('/health/view/{id}',[RegController::class,'ViewHeath']);
Route::get('/health/delete/{id}',[RegController::class,'DeleteHospital']);
Route::post('/hospital/update/{id}',[RegController::class,'UpdateHospital']);
Route::get('/table/parole',[RegController::class,'ParoleTable'])->name('table.parole');
Route::get('/parole/view/{id}',[RegController::class,'ViewParole']);
Route::post('/parole/update/{id}',[RegController::class,'UpdateParole']);
Route::get('/parole/delete/{id}',[RegController::class,'DeleteParole']);
Route::get('/table/crime',[RegController::class,'CrimeTable'])->name('table.crime_rc');
Route::get('/crime/view/{id}',[RegController::class,'ViewCrime']);
Route::post('/crime/update/{id}',[RegController::class,'UpdateCrime']);
Route::get('/crime/delete/{id}',[RegController::class,'DeleteCrime']);
//user section
Route::get('/table/all/prisoner',[PrisonerController::class,'AllPrisoner'])->name('table.all');
Route::get('/prisoner/all/view/{id}',[PrisonerController::class,'allView']);
Route::get('/table/visiotr/all',[VisitorController::class,'VisitorTableAll'])->name('table.visitorall');
Route::get('/vistor/all/view/{id}',[VisitorController::class,'visitorAllView']);
Route::get('/table/health/all',[RegController::class,'HealthTableAll'])->name('table.healthall');
Route::get('/health/view/all/{id}',[RegController::class,'ViewHeathAll']);
Route::get('/table/parole/all',[RegController::class,'ParoleTableAll'])->name('table.paroleall');
Route::get('/parole/view/all/{id}',[RegController::class,'ViewParoleAll']);
Route::get('/table/crime/all',[RegController::class,'CrimeTableAll'])->name('table.crimeall');
Route::get('/crime/view/all/{id}',[RegController::class,'ViewCrimeAll']);
Route::get('/table/health/prisoner',[RegController::class,'HealthTableP'])->name('table.healthp');
Route::get('/table/parole/prisoner',[RegController::class,'ParoleTableP'])->name('table.parolep');
Route::get('/table/crime/prisoner',[RegController::class,'CrimeTableP'])->name('table.crimep');
Route::get('/table/health/visitor',[RegController::class,'HealthTableV'])->name('table.healthv');
Route::get('/table/parole/visitor',[RegController::class,'ParoleTableV'])->name('table.parolev');
Route::get('/table/crime/visitor',[RegController::class,'CrimeTableV'])->name('table.crimev');
