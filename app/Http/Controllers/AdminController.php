<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Es;
use App\Contact;
use App\Http\Requests\AddUserRequestAdmin;
use DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\http\Requests\EsRequest;
use App\Http\Requests\UserUpdatePassword;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index(User $user, Contact $contact,Es $estate)
    {
        $estateCountActive = countallestatesAppendTostatus(1);
        $estateCountDeactive = countallestatesAppendTostatus(0);
        $usersCount = $user->count();
        $contactCount = $contact->count();

        $mapping = $estate->select('es_latitude','es_langtuide','es_type')->get();
      $chart = $estate->select(DB::raw('COUNT(*) as counting , month '))->where('year' , date('Y'))->groupBy('month')->orderBy('month','asc')->get()->toArray();

        $array = [];
        if(isset($chart[0]['month'])){
            for($i=1;$i<$chart[0]['month'];$i++) {
                $array[]=0;
            }
        }

        $new = array_merge($array,$chart);
        $latestUsers = $user->take('8')->orderBy('id','desc')->get();
        $latestEStates = $estate->take('6')->orderBy('id','desc')->get();
        $latestContacts = $contact->take('7')->orderBy('id','desc')->get();



     return view('admin.home.index',
          compact('estateCountActive',
              'estateCountDeactive',
                  'usersCount',
                  'contactCount',
                  'mapping',
                  'new',
                 'latestUsers',
                 'latestEStates',
                 'latestContacts'
          ));
    }
    
    public function showyearstatics(Es $estate){
        $year = date('Y');
        $chart = $estate->select(DB::raw('COUNT(*) as counting , month '))->where('year' , date('Y'))->groupBy('month')->orderBy('month','asc')->get()->toArray();

        $array = [];
        if(isset($chart[0]['month'])){
            for($i=1;$i<$chart[0]['month'];$i++) {
                $array[]=0;
            }
        }
        $new = array_merge($array,$chart);

        return view('admin.home.statics',compact('year','new'));
    }
    public function showthisyear(Es $estate ,Request $request){
        $year = $request->year;
        $chart = $estate->select(DB::raw('COUNT(*) as counting , month '))->where('year' , date($year))->groupBy('month')->orderBy('month','asc')->get()->toArray();

        $array = [];
        if(isset($chart[0]['month'])){
        for($i=1;$i<$chart[0]['month'];$i++) {
               $array[]=0;
        }
        }

        $new = array_merge($array,$chart);
        return view('admin.home.statics',compact('year','new'));
    }
}
