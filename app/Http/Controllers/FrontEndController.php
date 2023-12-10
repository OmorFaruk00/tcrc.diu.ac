<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('index');
    }
    public function aboutTeam(){
        return view('about.team');
    }
    public function aboutHistory(){
        return view('about.history');
    }
    public function aboutExecutive(){
        return view('about.executive');
    }
    public function contact(){
        return view('contact');
    }
    public function recentActivities(){
        return view('recent-activities');
    }
    public function publication(){
        return view('publication');
    }
    public function achivement(){
        return view('achivement');
    }
    public function network(){
        return view('our-network');
    }
    public function research(){
        return view('research');
    }
    public function otherResearch(){
        return view('other-research');
    }
    public function advocacy(){
        return view('advocacy');
    }
    public function capacityBuilding(){
        return view('capacity-building');
    }
     public function publicAwereness(){
        return view('public-awereness');
    }
    public function roadSefety(){
        return view('road-sefety');
    }
    public function climateChange(){
        return view('climate-change');
    }
    public function migration(){
        return view('migration');
    }
    public function publicHealth(){
        return view('public-health');
    }

    public function socialMedia(){
        return view('social-media');
    }
    public function mainstreamMedia(){
        return view('mainstream-media');
    }
    public function electronicMedia(){
        return view('electronic-media');
    }

    public function activity1(){
        return view('activity.activity1');
    }
    public function activity2(){
        return view('activity.activity2');
    }
    public function activity3(){
        return view('activity.activity3');
    }
    public function activity4(){
        return view('activity.activity4');
    }
    public function activity5(){
        return view('activity.activity5');
    }
    public function activity6(){
        return view('activity.activity6');
    }
    public function activity7(){
        return view('activity.activity7');
    }
    public function activity8(){
        return view('activity.activity8');
    }
   

    
}
