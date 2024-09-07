<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiTrait;

class OurExpertiseController extends Controller
{
    use ApiTrait;
    public function recentActivies(){
        return view('ourExpertise.recent_activities.index' );
    }
    public function recentActiviesDetails($id){
        $data = $this->getActivityDetails($id);
        return view('ourExpertise.recent_activities.details',compact('data'));
    }

    public function graphicalHealth(){
        return view('ourExpertise.graphical_health.index');
    }
    public function graphicalHealthDetails($id){
        $data = $this->getActivityDetails($id);
        return view('ourExpertise.graphical_health.details',compact('data'));
    }

    public function standardPackaging(){
        return view('ourExpertise.standard_packaging.index');
    }
    public function standardPackagingDetails($id){
        $data = $this->getActivityDetails($id);
        return view('ourExpertise.standard_packaging.details',compact('data'));
    }

    public function emergingTobacco(){
        return view('ourExpertise.emerging_tobaco.index');
    }
    public function emergingTobaccoDetails($id){
        $data = $this->getActivityDetails($id);
        return view('ourExpertise.emerging_tobaco.details',compact('data'));
    }

    public function tobaccoTaxation(){
        return view('ourExpertise.tobaco_taxation.index');
    }
    public function tobaccoTaxationDetails($id){
        $data = $this->getActivityDetails($id);
        return view('ourExpertise.tobaco_taxation.details',compact('data'));
    }

    public function lawAmendment(){        
        return view('ourExpertise.law_amendent.index');
    }
    public function lawAmendmentDetails($id){
        $data = $this->getActivityDetails($id);
        return view('ourExpertise.law_amendent.details',compact('data'));
    }

    public function publicHealth(){
        return view('ourExpertise.public_health.index');
    }
    public function publicHealthDetails($id){
        $data = $this->getActivityDetails($id);
        return view('ourExpertise.public_health.details',compact('data'));
    }

    public function mayorAlliance(){
        return view('ourExpertise.mayor_aliance.index');
    }
    public function mayorAllianceDetails($id){
        $data = $this->getActivityDetails($id);
        return view('ourExpertise.mayor_aliance.details',compact('data'));
    }

    public function otherActivities(){
        return view('ourExpertise.other_activities.index');
    }
    public function otherActivitiesDetails($id){
        $data = $this->getActivityDetails($id);
        return view('ourExpertise.other_activities.details',compact('data'));
    }
}
