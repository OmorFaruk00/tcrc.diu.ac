<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait ApiTrait
{
    public static function ssl()
    {
        return stream_context_create(
            [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]
        );
    }

    public function getSlider()
    {

        if (Cache::has('sliders')) {
            return Cache::get('sliders');
        }

       $result = json_decode(@file_get_contents('' . env('API_URL') . '/slider', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('sliders',$result, 1440); //1440 minute = 1 day
            return$result;
        }
        return response()->json(NULL, 404);
    }
    public function photoData()
    {
        if (Cache::has('photos')) {
            return Cache::get('photos');
        }

       $result = json_decode(@file_get_contents('' . env('API_URL') . '/photos', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('photos',$result, 1440); //1440 minute = 1 day
            return$result;
        }
        return response()->json(NULL, 404);
    }

    public function aboutData()
    {
        if (Cache::has('about')) {
            return Cache::get('about');
        }

       $result = json_decode(@file_get_contents('' . env('API_URL') . '/about/cdc', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('about',$result, 1440); //1440 minute = 1 day
            return$result;
        }
        return response()->json(NULL, 404);
    }
    public function videoData()
    {
        if (Cache::has('videos')) {
            return Cache::get('videos');
        }

       $result = json_decode(@file_get_contents('' . env('API_URL') . '/videos', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('videos',$result, 1440); //1440 minute = 1 day
            return$result;
        }
        return response()->json(NULL, 404);
    }
    public function teamData()
    {
        if (Cache::has('teams')) {
            return Cache::get('teams');
        }

       $result = json_decode(@file_get_contents('' . env('API_URL') . '/teams/cdc', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('teams',$result, 1440); //1440 minute = 1 day
            return$result;
        }
        return response()->json(NULL, 404);
    }
    public function getRecentActivities($type){
        if (Cache::has($type)) {
            return Cache::get($type);
        }

       $result = json_decode(@file_get_contents('' . env('API_URL') . '/news-activities/'.$type, false, self::ssl()));

        if (!empty($result)) {
            Cache::put($type,$result, 1440); //1440 minute = 1 day
            return$result;
        }
        return response()->json(NULL, 404);

    }
    public function getTeamMembers($type){
        if (Cache::has($type)) {
            return Cache::get($type);
        }

       $result = json_decode(@file_get_contents('' . env('API_URL') . '/teams/'.$type, false, self::ssl()));

        if (!empty($result)) {
            Cache::put($type,$result, 1440); //1440 minute = 1 day
            return$result;
        }
        return response()->json(NULL, 404);

    }
    public function getPartner(){
        if (Cache::has('partner')) {
            return Cache::get('partner');
        }

       $result = json_decode(@file_get_contents('' . env('API_URL') . '/partner', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('partner',$result, 1440); //1440 minute = 1 day
            return$result;
        }
        return response()->json(NULL, 404);

    }
    public function getActivityDetails($id){
        // if (Cache::has('activities_details')) {
        //     return Cache::get('activities_details');
        // }

       $result = json_decode(@file_get_contents('' . env('API_URL') . '/news-activity/'.$id, false, self::ssl()));
       return$result->data;

        // if (!empty($result)) {
        //     Cache::put('activities_details',$result, 1440); //1440 minute = 1 day
        //     return$result->data;
        // }
        // return response()->json(NULL, 404);

    }
}
