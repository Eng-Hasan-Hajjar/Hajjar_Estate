<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\EsRequest;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
  public function welcome()
    {
        return view('welcome');
    }
    public function showAllEnable(Es $es){
        $esAll=$es->where('es_status',0)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
    }
    public  function  contact(){
      return view('website.contact.contact');
  }
  public  function  more1(){
    return view('website.more.more1');
}
public  function  more2(){
  return view('website.more.more2');
}
public  function  more3(){
  return view('website.more.more3');
}
public  function  feature1(){
  return view('website.feature.feature1');
}public  function  feature2(){
  return view('website.feature.feature2');
}public  function  feature3(){
  return view('website.feature.feature3');
} 
}
