<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;

class VisitorController extends Controller
{
    public function visitorIndex()
    {
    	$visitorData = json_decode(Visitor::orderBy('id', 'desc')->take(500)->get());
    	return view('visitor',['visitorData'=>$visitorData]);
    }
}
