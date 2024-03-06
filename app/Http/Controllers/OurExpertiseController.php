<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiTrait;

class OurExpertiseController extends Controller
{
    use ApiTrait;
    public function recentActivies(){
        $response = $this->getRecentActivities('activities');
        return view('ourExpertise.recent_activities.index' ,compact('response'));
    }
    public function recentActiviesDetails($id){
        $activity = $this->getActivityDetails($id);
        return view('ourExpertise.recent_activities.details',compact('activity'));
    }

    public function graphicalHealth(){
        return view('ourExpertise.graphical_health.index');
    }
    public function graphicalHealthDetails($id){
        return view('ourExpertise.graphical_health.details');
    }

    public function standardPackaging(){
        return view('ourExpertise.standard_packaging.index');
    }
    public function standardPackagingDetails($id){
        return view('ourExpertise.standard_packaging.details');
    }

    public function emergingTobacco(){
        return view('ourExpertise.emerging_tobaco.index');
    }
    public function emergingTobaccoDetails($id){
        return view('ourExpertise.emerging_tobaco.details');
    }

    public function tobaccoTaxation(){
        return view('ourExpertise.tobaco_taxation.index');
    }
    public function tobaccoTaxationDetails($id){
        return view('ourExpertise.tobaco_taxation.details');
    }

    public function lawAmendment(){
        return view('ourExpertise.law_amendent.index');
    }
    public function lawAmendmentDetails($id){
        return view('ourExpertise.law_amendent.details');
    }

    public function publicHealth(){
        return view('ourExpertise.public_health.index');
    }
    public function publicHealthDetails($id){
        return view('ourExpertise.public_health.details');
    }

    public function mayorAlliance(){
        return view('ourExpertise.mayor_aliance.index');
    }
    public function mayorAllianceDetails($id){
        return view('ourExpertise.mayor_aliance.details');
    }

    public function otherActivities(){
        return view('ourExpertise.other_activities.index');
    }
    public function otherActivitiesDetails($id){
        return view('ourExpertise.other_activities.details');
    }
}
