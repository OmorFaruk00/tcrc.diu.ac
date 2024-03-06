<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicationsController extends Controller
{
    public function research(){
        return view('publications.research.index');

    }
    public function researchDetails($id){
        return view('publications.research.details');
        
    }

    public function article(){
        return view('publications.article.index');

    }
    public function articleDetails($id){
        return view('publications.article.details');
        
    }
    public function factsheet(){
        return view('publications.factsheet.index');

    }
    public function factsheetDetails($id){
        return view('publications.factsheet.details');
        
    }

    public function policyBrief(){
        return view('publications.policy_brief.index');

    }
    public function policyBriefDetails($id){
        return view('publications.policy_brief.details');
        
    }
    public function others(){
        return view('publications.others.index');

    }
    public function othersDetails($id){
        return view('publications.others.details');
        
    }
}
