<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiTrait;

class MediaCenterController extends Controller
{
    use ApiTrait;
    public function mainstreamMedia(){
        return view('media_center.mainstream_media.index');
    }
    public function mainstreamMediaDetails(){
        return view('media_center.mainstream_media.details');
    }
    public function electronicMedia(){
        return view('media_center.electronic_media.index');
    }
    public function electronicMediaDetails(){
        return view('media_center.electronic_media.details');
    }
    public function photo(){
        $photos = $this->photoData();
        return view('media_center.photo.index',compact('photos'));
    }
    public function video(){
         $videos = $this->videoData();
        return view('media_center.video.index',compact('videos'));
    }
}
