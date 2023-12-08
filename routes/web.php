<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[FrontEndController::class,'index'])->name('home');
Route::get('/about_team',[FrontEndController::class,'aboutTeam'])->name('about.team');
Route::get('/about_history',[FrontEndController::class,'aboutHistory'])->name('about.history');
Route::get('/about_executive',[FrontEndController::class,'aboutExecutive'])->name('about.executive');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');
Route::get('/recent_activities',[FrontEndController::class,'recentActivities'])->name('recent.activities');
Route::get('/publication',[FrontEndController::class,'publication'])->name('publication');
Route::get('/achivement',[FrontEndController::class,'achivement'])->name('achivement');
Route::get('/our_network',[FrontEndController::class,'network'])->name('network');
Route::get('/research',[FrontEndController::class,'research'])->name('research');
Route::get('/other_research',[FrontEndController::class,'otherResearch'])->name('other.research');
Route::get('/advocacy',[FrontEndController::class,'advocacy'])->name('advocacy');
Route::get('/capacity_building',[FrontEndController::class,'capacityBuilding'])->name('capacity');
Route::get('/public_awereness',[FrontEndController::class,'publicAwereness'])->name('public.awereness');
Route::get('/road_sefety',[FrontEndController::class,'roadSefety'])->name('road.safety');
Route::get('/climate_change',[FrontEndController::class,'climateChange'])->name('climate_change');
Route::get('/migration',[FrontEndController::class,'migration'])->name('migration');
Route::get('/public_health',[FrontEndController::class,'publicHealth'])->name('public.health');
Route::get('/social_media',[FrontEndController::class,'socialMedia'])->name('social.media');
Route::get('/mainstream_media',[FrontEndController::class,'mainstreamMedia'])->name('mainstream.media');
Route::get('/electronic_media',[FrontEndController::class,'electronicMedia'])->name('electronic.media');
