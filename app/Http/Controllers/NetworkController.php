<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function nationalPartner(){

        return view('networks.national_partner');
    }
    public function internationalPartner(){

        return view('networks.international_partner');
    }
}
