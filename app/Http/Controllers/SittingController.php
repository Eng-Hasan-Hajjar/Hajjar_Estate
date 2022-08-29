<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\EsRequest;

class SittingController extends Controller
{
    public function index(Sitting $sitting){
    	
   		$sitting=$sitting->all();
    	return view('admin.sitesetting.index',compact(sitting));
    }
}
