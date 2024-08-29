<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function ongoingProject(){
    return view('project.ongoing_project.index');
   }
   public function ongoingProjectDetails($id){
    return view('project.ongoing_project.details');
   }
   public function completedProject(){
    return view('project.completed_project.index');
   }
   public function completedProjectDetails($id){
    return view('project.completed_project.details');
   }
}
