<?php

namespace App\Http\Controllers;

use App\Service;
use App\Visitor;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function homeIndex()
    {
        $userIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $visitingDateTime = date('Y-m-d h:i:sa');
        Visitor::insert(['ip_address'=>$userIP, 'visiting_time'=>$visitingDateTime]);

        $serviceData = json_decode(Service::all());

        return view('home', ['serviceData'=>$serviceData]);
    }
}
