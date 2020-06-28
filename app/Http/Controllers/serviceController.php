<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function index($slug)
    {
       $details = Service::where('slug',$slug)->first();
       return view('pages.services_detail',compact('details'));
    }
}
