<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiTrait;

class FrontEndController extends Controller
{
    use ApiTrait;
    public function index(){
        // $teams = $this->getTeamMembers('executive_team');
        // $activities = $this->getRecentActivities('activities');
        // $partners = $this->getPartner();
        $sliders =  $this->getSlider();
        return view('index',compact('sliders'));
    }
    public function aboutTeam(){
        $teams = $this->getTeamMembers('resource');
        return view('about.team',compact('teams'));
    }
    public function aboutHistory(){
        return view('about.history');
    }
    public function aboutExecutive(){
        $teams = $this->getTeamMembers('executive_team');
        return view('about.executive',compact('teams'));
    }
    public function contact(){
        return view('contact');
    }    
    public function bdTpack(){
        return view('bd_tpack');
    } 
   
    public function network(){
        return view('our-network');
    }
    public function achivement(){
        return view('achivement.index');
    }
    public function achivementDetails($id){
        $data = $this->getPublicationDetails($id);
        return view('achivement.details',compact('data'));
    }
    
    
}
