<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Traits\ApiTrait;

class ProjectController extends Controller
{
   use ApiTrait;
   public function ongoingProject(){
    return view('project.ongoing_project.index');
   }
   public function ongoingProjectDetails($id){
    $data = $this->getActivityDetails($id);
    return view('project.ongoing_project.details',compact('data'));
   }
   public function completedProject(){
    return view('project.completed_project.index');
   }
   public function completedProjectDetails($id){
      $data = $this->getActivityDetails($id);
    return view('project.completed_project.details',compact('data'));
   }
}
