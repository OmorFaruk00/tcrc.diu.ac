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
Route::get('/research1',[FrontEndController::class,'research1'])->name('research1');
Route::get('/research2',[FrontEndController::class,'research2'])->name('research2');
Route::get('/research3',[FrontEndController::class,'research3'])->name('research3');
Route::get('/research4',[FrontEndController::class,'research4'])->name('research4');
Route::get('/research5',[FrontEndController::class,'research5'])->name('research5');
Route::get('/research6',[FrontEndController::class,'research6'])->name('research6');
Route::get('/research7',[FrontEndController::class,'research7'])->name('research7');
Route::get('/research8',[FrontEndController::class,'research8'])->name('research8');
Route::get('/other_research',[FrontEndController::class,'otherResearch'])->name('other.research');
Route::get('/advocacy',[FrontEndController::class,'advocacy'])->name('advocacy');
Route::get('/advocacy1',[FrontEndController::class,'advocacy1'])->name('advocacy1');
Route::get('/advocacy2',[FrontEndController::class,'advocacy2'])->name('advocacy2');
Route::get('/advocacy3',[FrontEndController::class,'advocacy3'])->name('advocacy3');
Route::get('/capacity_building',[FrontEndController::class,'capacityBuilding'])->name('capacity');
Route::get('/capacity_building1',[FrontEndController::class,'capacityBuilding1'])->name('capacity1');
Route::get('/capacity_building2',[FrontEndController::class,'capacityBuilding2'])->name('capacity2');
Route::get('/communication',[FrontEndController::class,'communication'])->name('communication');
Route::get('/communication1',[FrontEndController::class,'communication1'])->name('communication1');
Route::get('/communication2',[FrontEndController::class,'communication2'])->name('communication2');
Route::get('/communication3',[FrontEndController::class,'communication3'])->name('communication3');
Route::get('/communication4',[FrontEndController::class,'communication4'])->name('communication4');
Route::get('/road_sefety',[FrontEndController::class,'roadSefety'])->name('road.safety');
Route::get('/road_sefety_1',[FrontEndController::class,'roadSefety1'])->name('road_safety_1');
Route::get('/climate_change',[FrontEndController::class,'climateChange'])->name('climate_change');
Route::get('/migration',[FrontEndController::class,'migration'])->name('migration');
Route::get('/migration1',[FrontEndController::class,'migration1'])->name('migration_1');
Route::get('/migration2',[FrontEndController::class,'migration2'])->name('migration_2');
Route::get('/public_health',[FrontEndController::class,'publicHealth'])->name('public.health');
Route::get('/public_health_1',[FrontEndController::class,'publicHealth1'])->name('public_health_1');
Route::get('/public_health_2',[FrontEndController::class,'publicHealth2'])->name('public_health_2');
Route::get('/public_health_3',[FrontEndController::class,'publicHealth3'])->name('public_health_3');
Route::get('/social_media',[FrontEndController::class,'socialMedia'])->name('social.media');
Route::get('/mainstream_media',[FrontEndController::class,'mainstreamMedia'])->name('mainstream.media');
Route::get('/mainstream_media_1',[FrontEndController::class,'mainstreamMedia1'])->name('mainstream1');
Route::get('/mainstream_media_2',[FrontEndController::class,'mainstreamMedia2'])->name('mainstream2');
Route::get('/mainstream_media_3',[FrontEndController::class,'mainstreamMedia3'])->name('mainstream3');
Route::get('/mainstream_media_4',[FrontEndController::class,'mainstreamMedia4'])->name('mainstream4');
Route::get('/mainstream_media_5',[FrontEndController::class,'mainstreamMedia5'])->name('mainstream5');
Route::get('/mainstream_media_6',[FrontEndController::class,'mainstreamMedia6'])->name('mainstream6');
Route::get('/mainstream_media_7',[FrontEndController::class,'mainstreamMedia7'])->name('mainstream7');
Route::get('/mainstream_media_8',[FrontEndController::class,'mainstreamMedia8'])->name('mainstream8');

Route::get('/electronic_media',[FrontEndController::class,'electronicMedia'])->name('electronic.media');
Route::get('/electronic_media_1',[FrontEndController::class,'electronicMedia1'])->name('electronic1');
Route::get('/electronic_media_2',[FrontEndController::class,'electronicMedia2'])->name('electronic2');
Route::get('/electronic_media_3',[FrontEndController::class,'electronicMedia3'])->name('electronic3');
Route::get('/electronic_media_4',[FrontEndController::class,'electronicMedia4'])->name('electronic4');

Route::get('/activity1',[FrontEndController::class,'activity1'])->name('activity1');
Route::get('/activity2',[FrontEndController::class,'activity2'])->name('activity2');
Route::get('/activity3',[FrontEndController::class,'activity3'])->name('activity3');
Route::get('/activity4',[FrontEndController::class,'activity4'])->name('activity4');
Route::get('/activity5',[FrontEndController::class,'activity5'])->name('activity5');
Route::get('/activity6',[FrontEndController::class,'activity6'])->name('activity6');
Route::get('/activity7',[FrontEndController::class,'activity7'])->name('activity7');
Route::get('/activity8',[FrontEndController::class,'activity8'])->name('activity8');

Route::get('/achivement1',[FrontEndController::class,'achivement1'])->name('achivement1');
Route::get('/achivement2',[FrontEndController::class,'achivement2'])->name('achivement2');

Route::get('/publication1',[FrontEndController::class,'publication1'])->name('publication1');
Route::get('/publication2',[FrontEndController::class,'publication2'])->name('publication2');
Route::get('/publication3',[FrontEndController::class,'publication3'])->name('publication3');
Route::get('/publication4',[FrontEndController::class,'publication4'])->name('publication4');
Route::get('/publication5',[FrontEndController::class,'publication5'])->name('publication5');
Route::get('/publication6',[FrontEndController::class,'publication6'])->name('publication6');
Route::get('/publication7',[FrontEndController::class,'publication7'])->name('publication7');
Route::get('/publication8',[FrontEndController::class,'publication8'])->name('publication8');

Route::get('/climate_change_1',[FrontEndController::class,'climateChange1'])->name('climate_change_1');
Route::get('/climate_change_2',[FrontEndController::class,'climateChange2'])->name('climate_change_2');
Route::get('/climate_change_3',[FrontEndController::class,'climateChange3'])->name('climate_change_3');
Route::get('/climate_change_4',[FrontEndController::class,'climateChange4'])->name('climate_change_4');
Route::get('/consultancy',[FrontEndController::class,'consultancy'])->name('consultancy');
Route::view('/admin','admin.layouts.admin');