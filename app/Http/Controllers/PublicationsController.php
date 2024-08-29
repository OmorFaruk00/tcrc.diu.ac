<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiTrait;

class publicationsController extends Controller
{
    use ApiTrait;
    public function research(){
        $data = $this->getPublications('research');
        return view('publications.research.index',compact('data'));

    }
    public function researchDetails($id){
        $data = $this->getPublicationDetails($id);
        return view('publications.research.details',compact('data'));
        
    }

    public function journalArticle(){
        $data = $this->getPublications('journal_articles');
        return view('publications.article.journal.index',compact('data'));

    }
    public function journalArticleDetails($id){
         $data = $this->getPublicationDetails($id);
        return view('publications.article.journal.details',compact('data'));
        
    }
    public function newspaperArticle(){
        $data = $this->getPublications('newspaper_articles');
        return view('publications.article.newspaper.index',compact('data'));

    }
    public function newspaperArticleDetails($id){
        $data = $this->getPublicationDetails($id);
        return view('publications.article.newspaper.details',compact('data'));
        
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
    public function programReport(){
        return view('publications.program_report.index');

    }
    public function programReportDetails($id){
        return view('publications.program_report.details');
        
    }
}
