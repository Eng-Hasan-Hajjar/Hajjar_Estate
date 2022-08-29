<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\http\Requests\EsRequest;

class SiteSettingController extends Controller
{
   public function index(SiteSetting $sitesettings){
    	 
   		$sitesetting= $sitesettings->all();
    //  dd($sitesetting);
    	return view('admin.sitesetting.index',compact('sitesetting'));
    }


    public function store(Request $request , SiteSetting $sitesetting)
    {
   
      foreach (Arr::except($request->toArray(),['_token','submit']) as $key => $req)
      {
          $siteSettingUpdate = $sitesetting->where('nameseting' , $key)->first();
          if(isset($siteSettingUpdate['type']) != 3) { 
              $siteSettingUpdate->fill(['value' => $req])->save();
          }else{
              $filename = UploadImage($req,'/public/website/slider/',base_path().'/public/website/slider/'.$siteSettingUpdate->value);
                if($filename !='') {
                    $siteSettingUpdate->fill(['value' => $filename])->save();
                }
          }
      }
      return Redirect::back()->withFlashMessage('the settings have been updated successfully');
    }
 
    public function aboutsite(Request $request , SiteSetting $sitesetting){
      $sitesetting = $sitesetting->all();
      return view('website.aboutsite.aboutsite',compact('sitesetting'));
  }
}
