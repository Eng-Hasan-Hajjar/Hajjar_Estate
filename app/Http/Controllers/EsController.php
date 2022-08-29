<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Es;
use App\Image;
use App\EsService ;
use Auth;
use App\http\Requests\EsRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Arr;
use DB;
use DataTables;

class EsController extends Controller
{
    public function index(){
       $data = Es::latest()->paginate(3);
    	 return view('admin.es.index', compact('data'))
                       ->with('i', (request()->input('page', 1) - 1) * 3);

    }

     public function create(){
    	 return view('admin.es.add');
    }
     public function show($id)
    {
           $data = Es::findOrFail($id);
        return view('admin.es.view', compact('data'));
    }
//     public function store(EsRequest $esRequest,Es $es){
public function store(Request $request){
  $user=Auth::user();
          $request->validate([
              'es_name'=>'required|min:1|max:100',
             'es_price'=>'required', 
             'es_rent'=>'required|integer',
              'es_sequar'=>'required|min:2|max:100',
               'es_type'=>'required|integer', 
               'es_small_dis'=>'required|min:5|max:160',
                'es_meta'=>'required|min:5|max:200', 
                'es_langtuide'=>'required',
                 'es_latitude'=>'required',
                  'es_larg_dis'=>'required|min:5',
                   'es_status'=>'required|integer', 
                   'es_rooms'=>'required',
                   'es_place'=>'required',
                   'es_image'=>'required|image|max:2048',
        ]);

        $image = $request->file('es_image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
              'es_name'=>$request->es_name,
              'es_price'=>$request->es_price, 
              'es_rent'=>$request->es_rent,
              'es_sequar'=>$request->es_sequar,
              'es_type'=>$request->es_type, 
              'es_small_dis'=>$request->es_small_dis,
              'es_meta'=>$request->es_meta, 
              'es_langtuide'=>$request->es_langtuide,
              'es_latitude'=>$request->es_latitude,
              'es_larg_dis'=>$request->es_larg_dis,
              'es_status'=>$request->es_status,
              'user_id'=>$user->id,
              'es_rooms'=>$request->es_rooms,
              'es_place'=>  $request->es_place,
              'es_image'     =>  $new_name
        );

        Es::create($form_data);

        return redirect('/adminpannel/es')->with('success', 'Data Added successfully.');




      /*  $user=Auth::user();

        $data=[
              'es_name'=>$esRequest->es_name,
              'es_price'=>$esRequest->es_name, 
              'es_rent'=>$esRequest->es_rent,
              'es_sequar'=>$esRequest->es_sequar,
              'es_type'=>$esRequest->es_type, 
              'es_small_dis'=>$esRequest->es_small_dis,
              'es_meta'=>$esRequest->es_meta, 
              'es_langtuide'=>$esRequest->es_langtuide,
              'es_latitude'=>$esRequest->es_latitude,
              'es_larg_dis'=>$esRequest->es_larg_dis,
              'es_status'=>$esRequest->es_status,
              'user_id'=>$user->id,
              'es_rooms'=>$esRequest->es_rooms,
              'es_place'=>  $esRequest->es_place,
              'es_image'     =>  $new_name,
        ];
        $es->create($data);
        alert()->success('succesfull Add','will disappear after few seconds.');
        return redirect('/adminpannel/es')->withFlashMessage('succesfull estate Add');
        */
    }
    public function edit ($id){
        $data =Es::find($id);
        return view('admin.es.edit',compact('data','id'));
    }
    public function update(Request $request,$id){
$user=Auth::user();
    $image_name = $request->hidden_image;
        $image = $request->file('es_image');
        if($image != '')
        {
            $request->validate([
                 'es_name'=>'required|min:1|max:100',
             'es_price'=>'required', 
             'es_rent'=>'required|integer',
              'es_sequar'=>'required|min:2|max:100',
               'es_type'=>'required|integer', 
               'es_small_dis'=>'required|min:5|max:160',
                'es_meta'=>'required|min:5|max:200', 
                'es_langtuide'=>'required',
                 'es_latitude'=>'required',
                  'es_larg_dis'=>'required|min:5',
                   'es_status'=>'required|integer', 
                   'es_rooms'=>'required',
                   'es_place'=>'required',
                   'es_image'=>'required|image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'es_name'=>'required|min:1|max:100',
             'es_price'=>'required', 
             'es_rent'=>'required|integer',
              'es_sequar'=>'required|min:2|max:100',
               'es_type'=>'required|integer', 
               'es_small_dis'=>'required|min:5|max:160',
                'es_meta'=>'required|min:5|max:200', 
                'es_langtuide'=>'required',
                 'es_latitude'=>'required',
                  'es_larg_dis'=>'required|min:5',
                   'es_status'=>'required|integer', 
                   'es_rooms'=>'required',
                   'es_place'=>'required'
            ]);
        }

        $form_data = array(
          'es_name'=>$request->es_name,
              'es_price'=>$request->es_price, 
              'es_rent'=>$request->es_rent,
              'es_sequar'=>$request->es_sequar,
              'es_type'=>$request->es_type, 
              'es_small_dis'=>$request->es_small_dis,
              'es_meta'=>$request->es_meta, 
              'es_langtuide'=>$request->es_langtuide,
              'es_latitude'=>$request->es_latitude,
              'es_larg_dis'=>$request->es_larg_dis,
              'es_status'=>$request->es_status,
              'user_id'=>$user->id,
              'es_rooms'=>$request->es_rooms,
              'es_place'=>  $request->es_place,
              'es_image'     =>  $image_name
        );
  
        Es::whereId($id)->update($form_data);

        return redirect('/adminpannel/es')->with('success', 'Data is successfully updated');



      /*  $estateUpdated=Es::find( $id );
        $estateUpdated->fill('es_image')(arr::except($request->all(),['es_image']))->save();

        if($request->file('es_image')){
          $fileName=$request->file('es_image')->getClientOrginalName();
          $request->file()->move(base::path().'/public/website/es_images/', $fileName);
        }
        alert()->success('succesfull Update','will disappear after few seconds.');
        return Redirect::back()->withFlashMessage('succesfull Update');
*/
    }
    public function destroy($id){
    
          
           $data = Es::findOrFail($id);
        $data->delete();
        return redirect('/adminpannel/es')->withFlashMessage('succesfull delete','Data is successfully deleted');
            }

   /* public function anyData(Es $es)
    {

    
      $ess = $es->all();

        return DataTables::of($ess)

            ->editColumn('es_name', function ($model) {
                return '<a href="'.url('/adminpanel/es/' . $model->id . '/edit').'">'.$model->es_name.'</a>';
            })
            ->editColumn('es_type', function ($model) {
            	$type=es_type();
                return  '<span class="badge badge-info">' . $type[$model->es_type] . '</span>';
            })
   			->editColumn('es_status', function ($model) {
                return $model->es_status == 0 ? '<span class="badge badge-info">' . 'active' . '</span>' : '<span class="badge badge-warning">' . 'non active' . '</span>';
            })

          
            
            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/se/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                    $all .= '<a href="' . url('/adminpanel/es/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                return $all;
            })
            ->make(true);

    }*/
    public function showAllEnable(Es $es){

        $esAll=$es->where('es_status',0)->orderBy('id','desc')->paginate(15);

        return view('website.es.all',compact('esAll'));
    }
    public function forBuy(Es $es){
        $esAll=$es->where('es_status',0)->where('es_rent',0)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
    }
    
     public function forRent(Es $es){
        $esAll=$es->where('es_status',0)->where('es_rent',1)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
    }
   
       public function forMortgage(Es $es){
        $esAll=$es->where('es_status',0)->where('es_rent',2)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
    }
    public function showByType($type , Es $es){
      if(in_array($type, ['0','1','2'])){
        $esAll=$es->where('es_status',1)->where('es_type',$type)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
      }
        else return Redirect::back();
    }

     public function search(Request $request,Es $es){


            $requestAll=Arr::except($request->toArray(),['submit','_token','page']);
            $query=DB::table('es')->select('*');
            $array=[];
            $cout=count($requestAll);
            $i=0;

            foreach ($requestAll as $key => $req) {
              $i++;
                if($req != '')
                {
                  if($key=='es_price_from' && $request->es_price_to =='')
                    $query->where('es_price','>=',$req);
                  elseif($key=='es_price_to' && $request->es_price_from =='')
                    $query->where('es_price','<=',$req);
                  else
                   { if($key!='es_price_to' && $key!='es_price_from')
                    $query->where($key,$req);
                    }
                    $array[$key]=$req;
                  
                    

                }
                 elseif($cout==$i && $request->es_price_to !='' && $request->es_price_from){ 
                $query->whereBetween('es_price',[$request->es_price_from , $request->es_price_to]);
                       $array[$key]=$req;
                  }   

              }
               
            $esAll=$query->paginate(15);   
        return view('website.es.all',compact('esAll','array'));
    }


    public function showSingle($id){
      $es=Es::find($id);

      $esinfo=Es::findOrFail($id);
      $same_rent=$es->where('es_rent',$esinfo->es_rent)->orderBy(DB::raw('RAND()'))->take(1)->get();
      $same_type=$es->where('es_type',$esinfo->es_type)->orderBy(DB::raw('RAND()'))->take(1)->get();
      

      $images = Image::where('es_id' , $id)->get();


        return view('website.es.esinfo',compact('esinfo','images','same_rent','same_type'));
    }





















































































    public function estateslider(Es $estate)
    {
        $esAll  = $estate->where('es_status',1)->get();
        return view('home', compact('esAll '));
    }

    public function estateinfo($id, Es $estate,Image $image,EsService $esservices)
    {

        $esAll = $estate->findOrfail($id);
        $images = $image->where('es_id' , $id)->get();
        $esservices = $esservices->where('es_id' , $id)->get();
        $estatetype = $estate->where('es_type',$esAll->es_type)->orderBy(DB::raw('RAND()'))->take(3)->get();
       // $estateinvest = $estate->where('investmenttypeid',$esall->investmenttypeid)->orderBy(DB::raw('RAND()'))->take(3)->get();
      // return view('website.estate.estateinfo', compact('esall','estatetype','estateinvest','images','esservices'));

       return view('website.es.esinfo', compact('esAll','estatetype','images','esservices'));
    }

    public function userAddView(){

       return view('website.userestate.useradd');
    }
    public function userStore(EsRequest $request,Es $estate){


        if($request->file('es_image')) {
            $filename = UploadImage($request->file('es_image'));
            if(!$filename){
                return Redirect::back()->withFlashMessage('Please choose a picture its size lees than 600');
            }
            $image = $filename;
        }else{
            $image = '';
        }
        $user = Auth::user() ? Auth::user()->id : 0;
        $estate->create([
            'estatetypeid' => $request->estatetypeid,
            'investmenttypeid' => $request->investmenttypeid,
            'neighbourhoodid' => $request->neighbourhoodid,
            'directionid' => $request->directionid,
            'flour' => $request->flour,
            'roomnumber' => $request->roomnumber,
            'space' => $request->space,
            'price' => $request->price,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'description' => strip_tags(str_limit($request->discription,160)),
            'estate_small_dis' => $request->estate_small_dis,
            'estate_meta' => $request->estate_meta,
            'ownernumber' => $request->ownernumber,
            'image'=>$image,
            'user_id' => $user,
            'month'=>date('m'),
            'year'=>date('Y')
        ]);
        return view('website.userestate.done')->withFlashMessage('the estate has been added successfully');


    }

    public  function  showuseractiveestate(Es $estate){
        $user = Auth::user();
        $esAll  = $estate->where('user_id',$user->id)->where('es_status',0)->paginate(10);
        return view('website.userestate.showuserestate',compact('esAll','user'));
    }
    public  function  showuserdeactiveestate(Es $estate){
        $user = Auth::user();
        $esAll  = $estate->where('user_id',$user->id)->where('es_status',1)->paginate(10);
        return view('website.userestate.showuserestate',compact('esAll','user'));
    }
    public  function  nopermition($id, Es $estate){
        $user = Auth::user();
        $esAll = Es::findOrFail($id);
        // $esAll  = $estate->findOrFail($id);
        $messagetitle='this estate wait for manager agreement';
        $messagebody='the '.es_type()[$esAll ->es_type].' estate is exist but is waiting for the manager agreement and will be published within a maximum period of 24 hours';
        return view('website.es.noper', compact('esAll','messagetitle','messagebody','user'));

    }

    public function usereditestate($id, Es $estate)
    {
        $user = Auth::user();
        $estate = $estate->find($id);
        if($user->id !=$estate->user_id){
            $messagetitle= "this estate doesn’t belong to you";
            $messagebody= "the".es_type()[$estate->es_type]."estate doesn’t belong to you , you can’t edited";
            return view('website.es.noper', compact('esall','messagetitle','messagebody','user'));

        }
        return view('website.userestate.edituserestate', compact('estate','user'));
    }

    public function userupdateestate(EsRequest $request)
    {
        $estateUpdated = Es::find($request->es_id);
       // $estateUpdated=Arr::except($request->toArray(),['submit','_token','page']);
                   // dd(estateUpdated);
        $estateUpdated->fill(Arr::except($request->toArray(),['image']))->save();

       // $estateUpdated->fill(array_except($request->all(),['image']))->save();
        if($request->file('image')){
            $filename = UploadImage($request->file('image'),'/public/website/estateimages/',$estateUpdated->image);
            if($filename ==''){
                return Redirect::back()->withFlashMessage('Please choose a picture');
            }
            $estateUpdated->fill(['image' => $filename])->save();
        }
        return Redirect::back()->withFlashMessage('the estate has been updated successfully');

    }
    public function changestatus($id,$status,EState $estate){

        $estateupdate = $estate->find($id);
        $estateupdate->fill(['status' => $status])->save();
        return Redirect::back()->withFlashMessage('the estate status has been updated successfully');


    }
    public function addservices($id , EsService $service)
     {
         $services = $service->all();
        return view('website.es.service',compact('id','services'));
     }
     public function addservicespost(Request $request, EsService $service)
     {

         if(is_null($request->services))
         {
             return Redirect::back()->withFlashMessage('Please add some services');
         }
         $esservice = new  EsService();
         $esservice2 = EsService::all()->where('es_id' , $request->es_id);


         foreach($request->services as $service) {

             foreach ($esservice2 as $esservice)
             {
               if($service == $esservice->services)
                 {
                     return Redirect::back()->withFlashMessage('Please add new service');
                 }
             }
             EsService::create([
                 'services' => 'services/'.$service.'.jpg',
                 'es_id' => $request->es_id
             ]);
         }

         return Redirect::back()->withFlashMessage('Services have been added successfully');

     }




















    
}
