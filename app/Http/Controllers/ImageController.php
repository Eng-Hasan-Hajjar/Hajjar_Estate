<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\Redirect;
use App\http\Requests\EsRequest;


class ImageController extends Controller
{
    public function index($id){
        return view('website.estategallery.imageview',compact('id'));
    }


    public function  upload(Request  $request){
        $image_code = '';
        $images = $request->file('file');
        $es_id=$request->es_id;
       // dd($request);

        foreach ($images as $image){
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $new_name);
            Image::create([
                'image' => 'upload/'. $new_name,
                'es_id' => $request->es_id,
            ]);
            $image_code.='<div class="col-md-3" style="margin-bottom: 24px;"><img style=" width:400px;height:300px" src="upload/'.$new_name.'"class="img-thumbnail"/></div>';

        }

//        $output = array(
//             'success' => 'Images uploaded successfully',
//            'image'   =>  $image_code );
 //        return response()->json($output);
  return Redirect::back()->withFlashMessage('Gallery has been added successfully');




    }

}
