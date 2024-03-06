<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MediaCenterController;
use App\Http\Controllers\OurExpertiseController;
use App\Http\Controllers\PublicationsController;

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
Route::get('/bd_tpack',[FrontEndController::class,'bdTpack'])->name('bd_tpack');
Route::get('/recent_activities',[FrontEndController::class,'recentActivities'])->name('recent.activities');
Route::get('/publication',[FrontEndController::class,'publication'])->name('publication');
Route::get('/achivement',[FrontEndController::class,'achivement'])->name('achivement');
Route::get('/our_network',[FrontEndController::class,'network'])->name('network');
Route::get('/research',[FrontEndController::class,'research'])->name('researchs');
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


    Route::get('/recent_activies',[OurExpertiseController::class,'recentActivies'])->name('recent_activies');
    Route::get('/recent_activies/{id}',[OurExpertiseController::class,'recentActiviesDetails'])->name('recent_activities_details');

    Route::get('/graphical_health',[OurExpertiseController::class,'graphicalHealth'])->name('graphical_health');
    Route::get('/graphical_health/{id}',[OurExpertiseController::class,'graphicalHealthDetails'])->name('graphical_health_details');

    Route::get('/standard_packaging',[OurExpertiseController::class,'standardPackaging'])->name('standard_packaging');
    Route::get('/standard_packaging/{id}',[OurExpertiseController::class,'standardPackagingDetails'])->name('standard_packaging_details');

    Route::get('/emerging_tobacco',[OurExpertiseController::class,'emergingTobacco'])->name('emerging_tobacco');
    Route::get('/emerging_tobacco/{id}',[OurExpertiseController::class,'emergingTobaccoDetails'])->name('emerging_tobacco_details');

    Route::get('/tobacco_taxation',[OurExpertiseController::class,'tobaccoTaxation'])->name('tobacco_taxation');
    Route::get('/tobacco_taxation/{id}',[OurExpertiseController::class,'tobaccoTaxationDetails'])->name('tobacco_taxation_details');

    Route::get('/law_amendment',[OurExpertiseController::class,'lawAmendment'])->name('law_amendment');
    Route::get('/law_amendment/{id}',[OurExpertiseController::class,'lawAmendmentDetails'])->name('law_amendment_details');

    Route::get('/public_health',[OurExpertiseController::class,'publicHealth'])->name('public_health');
    Route::get('/public_health/{id}',[OurExpertiseController::class,'publicHealthDetails'])->name('public_health_details');

    Route::get('/mayor_alliance',[OurExpertiseController::class,'mayorAlliance'])->name('mayor_alliance');
    Route::get('/mayor_alliance/{id}',[OurExpertiseController::class,'mayorAllianceDetails'])->name('mayor_alliance_details');

    Route::get('/other_activities',[OurExpertiseController::class,'otherActivities'])->name('other_activities');
    Route::get('/other_activities/{id}',[OurExpertiseController::class,'otherActivitiesDetails'])->name('other_activities_details');



Route::prefix('publications')->group(function () {
    Route::get('/research',[PublicationsController::class,'research'])->name('research');
    Route::get('/research/{id}',[PublicationsController::class,'researchDetails'])->name('research_details');

    Route::get('/article',[PublicationsController::class,'article'])->name('article');
    Route::get('/article/{id}',[PublicationsController::class,'articleDetails'])->name('article_details');

    Route::get('/factsheet',[PublicationsController::class,'factsheet'])->name('factsheet');
    Route::get('/factsheet/{id}',[PublicationsController::class,'factsheetDetails'])->name('factsheet_details');

    Route::get('/policy_brief',[PublicationsController::class,'policyBrief'])->name('policy_brief');
    Route::get('/policy_brief/{id}',[PublicationsController::class,'policyBriefDetails'])->name('policy_brief_details');

    Route::get('/others',[PublicationsController::class,'others'])->name('others');
    Route::get('/others/{id}',[PublicationsController::class,'othersDetails'])->name('others_details');
    
});

Route::get('/project/ongoing_project',[ProjectController::class,'ongoingProject'])->name('ongoing_project');
Route::get('/project/ongoing_project/{id}',[ProjectController::class,'ongoingProjectDetails'])->name('ongoing_project_details');
Route::get('/project/completed_project',[ProjectController::class,'completedProject'])->name('completed_project');
Route::get('/project/completed_project/{id}',[ProjectController::class,'completedProjectDetails'])->name('completed_project_details');

Route::get('/networks/national_partner',[NetworkController::class,'nationalPartner'])->name('national_partner');
Route::get('/networks/international_partner',[NetworkController::class,'internationalPartner'])->name('international_partner');


Route::prefix('media_center')->group(function () {
    Route::get('/mainstream_media',[MediaCenterController::class,'mainstreamMedia'])->name('mainstream_media');
    Route::get('/mainstream_media/{id}',[MediaCenterController::class,'mainstreamMediaDetails'])->name('mainstream_media_details');

    Route::get('/electronic_media',[MediaCenterController::class,'electronicMedia'])->name('electronic_media');
    Route::get('/electronic_media/{id}',[MediaCenterController::class,'electronicMediaDetails'])->name('electronic_media_details');

    Route::get('/photo',[MediaCenterController::class,'photo'])->name('photo');
    Route::get('/video',[MediaCenterController::class,'video'])->name('video');

    
});