<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceIndex()
    {
    	return view('services');
    }
}
