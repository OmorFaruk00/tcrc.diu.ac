<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MediaCenterController;
use App\Http\Controllers\OurExpertiseController;
use App\Http\Controllers\PublicationsController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    return 'cache cleared successfully';
});



Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/about_team', [FrontEndController::class, 'aboutTeam'])->name('about.team');
Route::get('/about_history', [FrontEndController::class, 'aboutHistory'])->name('about.history');
Route::get('/fctc_5.3_policy', [FrontEndController::class, 'fctcPolicy'])->name('about.fctc_5.3_policy');
Route::get('/fctc_5.3_policy/{id}', [FrontEndController::class, 'fctcPolicyDetails'])->name('about.fctc_5.3_policy_details');
Route::get('/our_recognition', [FrontEndController::class, 'ourRecognition'])->name('about.our_recognition');
Route::get('/our_recognition/{id}', [FrontEndController::class, 'ourRecognitionDetails'])->name('about.our_recognition_details');
Route::get('/about_executive', [FrontEndController::class, 'aboutExecutive'])->name('about.executive');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');
Route::get('/bd_tpack', [FrontEndController::class, 'bdTpack'])->name('bd_tpack');


Route::get('/achivement', [FrontEndController::class, 'achivement'])->name('achivement');
Route::get('/achivement/{id}', [FrontEndController::class, 'achivementDetails'])->name('achivement_details');


Route::prefix('our_expertise')->group(function () {
    Route::get('/recent_activies', [OurExpertiseController::class, 'recentActivies'])->name('recent_activies');
    Route::get('/recent_activities/{id}', [OurExpertiseController::class, 'recentActiviesDetails'])->name('recent_activities_details');

    Route::get('/graphical_health', [OurExpertiseController::class, 'graphicalHealth'])->name('graphical_health');
    Route::get('/graphical_health/{id}', [OurExpertiseController::class, 'graphicalHealthDetails'])->name('graphical_health_details');

    Route::get('/standard_packaging', [OurExpertiseController::class, 'standardPackaging'])->name('standard_packaging');
    Route::get('/standard_packaging/{id}', [OurExpertiseController::class, 'standardPackagingDetails'])->name('standard_packaging_details');

    Route::get('/emerging_tobacco', [OurExpertiseController::class, 'emergingTobacco'])->name('emerging_tobacco');
    Route::get('/emerging_tobacco/{id}', [OurExpertiseController::class, 'emergingTobaccoDetails'])->name('emerging_tobacco_details');

    Route::get('/tobacco_taxation', [OurExpertiseController::class, 'tobaccoTaxation'])->name('tobacco_taxation');
    Route::get('/tobacco_taxation/{id}', [OurExpertiseController::class, 'tobaccoTaxationDetails'])->name('tobacco_taxation_details');

    Route::get('/law_amendment', [OurExpertiseController::class, 'lawAmendment'])->name('law_amendment');
    Route::get('/law_amendment/{id}', [OurExpertiseController::class, 'lawAmendmentDetails'])->name('law_amendment_details');

    Route::get('/public_health', [OurExpertiseController::class, 'publicHealth'])->name('public_health');
    Route::get('/public_health/{id}', [OurExpertiseController::class, 'publicHealthDetails'])->name('public_health_details');

    Route::get('/mayor_alliance', [OurExpertiseController::class, 'mayorAlliance'])->name('mayor_alliance');
    Route::get('/mayor_alliance/{id}', [OurExpertiseController::class, 'mayorAllianceDetails'])->name('mayor_alliance_details');

    Route::get('/other_activities', [OurExpertiseController::class, 'otherActivities'])->name('other_activities');
    Route::get('/other_activities/{id}', [OurExpertiseController::class, 'otherActivitiesDetails'])->name('other_activities_details');
});

Route::prefix('library')->group(function () {
    Route::get('/research', [PublicationsController::class, 'research'])->name('research');
    Route::get('/research/{id}', [PublicationsController::class, 'researchDetails'])->name('research_details');

    Route::get('/article/journal_article', [PublicationsController::class, 'journalArticle'])->name('journal_article');
    Route::get('/article/journal_article/{id}', [PublicationsController::class, 'journalArticleDetails'])->name('journal_article_details');

    Route::get('/article/newspaper_article', [PublicationsController::class, 'newspaperArticle'])->name('newspaper_article');
    Route::get('/article/newspaper_article/{id}', [PublicationsController::class, 'newspaperArticleDetails'])->name('newspaper_article_details');

    Route::get('/factsheet', [PublicationsController::class, 'factsheet'])->name('factsheet');
    Route::get('/factsheet/{id}', [PublicationsController::class, 'factsheetDetails'])->name('factsheet_details');

    Route::get('/policy_brief', [PublicationsController::class, 'policyBrief'])->name('policy_brief');
    Route::get('/policy_brief/{id}', [PublicationsController::class, 'policyBriefDetails'])->name('policy_brief_details');

    Route::get('/publication', [PublicationsController::class, 'programReport'])->name('publication');
    Route::get('/publication/{id}', [PublicationsController::class, 'programReportDetails'])->name('publication_details');
});

Route::get('/project/ongoing_project', [ProjectController::class, 'ongoingProject'])->name('ongoing_project');
Route::get('/project/ongoing_project/{id}', [ProjectController::class, 'ongoingProjectDetails'])->name('ongoing_project_details');
Route::get('/project/completed_project', [ProjectController::class, 'completedProject'])->name('completed_project');
Route::get('/project/completed_project/{id}', [ProjectController::class, 'completedProjectDetails'])->name('completed_project_details');

Route::get('/networks/national_partner', [NetworkController::class, 'nationalPartner'])->name('national_partner');
Route::get('/networks/international_partner', [NetworkController::class, 'internationalPartner'])->name('international_partner');


Route::prefix('media_center')->group(function () {
    Route::get('/mainstream_media', [MediaCenterController::class, 'mainstreamMedia'])->name('mainstream_media');
    Route::get('/mainstream_media/{id}', [MediaCenterController::class, 'mainstreamMediaDetails'])->name('mainstream_media_details');

    Route::get('/electronic_media', [MediaCenterController::class, 'electronicMedia'])->name('electronic_media');
    Route::get('/electronic_media/{id}', [MediaCenterController::class, 'electronicMediaDetails'])->name('electronic_media_details');

    Route::get('/photo', [MediaCenterController::class, 'photo'])->name('photo');
    Route::get('/video', [MediaCenterController::class, 'video'])->name('video');
});
