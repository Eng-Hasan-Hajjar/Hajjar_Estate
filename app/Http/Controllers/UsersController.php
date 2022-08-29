<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Es;
use App\Http\Requests\AddUserRequestAdmin;
use DataTables;
use RealRashid\SweetAlert\Facades\Alert;


use App\Http\Requests\UserUpdatePassword;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\http\Requests\EsRequest;

class UsersController extends Controller
{
    public function welcometoUser()
    {
        return view('welcome');
    }
    public function index(){
        $data = User::latest()->paginate(3);
        return view('admin.user.index', compact('data'))
                      ->with('i', (request()->input('page', 1) - 1) * 3);	
   //	return view('admin.user.index');
    }
    public function show($id)
    {
           $data = User::findOrFail($id);
        return view('admin.user.view', compact('data'));
    }

    public function create(){
    //    if(Auth::user()->id = 6) Auth::user()->Admin = 1 ;
    	return view('admin.user.add');
    }
 


   public function store(AddUserRequestAdmin $request,User $user){
//dd($request);
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
             'admin' => $request->admin,
        ]);
        alert()->success('succesfull Add','will disappear after few seconds.');
    	 return redirect('/adminpannel/users')->withFlashMessage('succesfull Add');
    }

    public function edit($id , User $user, Es $es)
    {
            $user = User::find( $id );
               //  return view('admin.user.edit',compact('user','id'));
          $estateactive = $es->where('user_id',$id)->where('status',1)->paginate(3);
            $estatedeactive = $es->where('user_id',$id)->where('status',0)->paginate(3);
            return view('admin.user.edit',compact('user','estateactive','estatedeactive'));
            
    }

public function update($id , User $userUpdated ,Request $request ){
	    $userUpdated=$user->find( $id );
	    $userUpdated->fill()($request->all())->save();
	    return Redirect::back()->withFlashMessage('succesfull Update');

}

public function updatepassword(Request $request, User $user)
{
    $user = $user->find($request->user_id);
    $password = Hash::make($request->password);
    $user-> fill(['password'=>$password])->save();
    return view('admin.user.index')->withFlashMessage('the password has been updated successfully');
}


public function destroy($id){
if($id != 1){
      $data = User::findOrFail($id);
      $data->delete();
    //  User::where('user_id',$id)->delete();
       return redirect('/adminpannel/users')->withFlashMessage('succesfull Delete');
   }
    return redirect('/adminpannel/users')->withFlashMessage('you cannot Delete Admin number 1');
}

public function anyData(User $user)
    {

     
      $users = $user->all();

        return DataTables::of($users)

            ->editColumn('name', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id . '/edit').'">'.$model->name.'</a>';
            })
            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? '<span class="badge badge-info">' . 'user' . '</span>' : '<span class="badge badge-warning">' . 'adminstrator' . '</span>';
            })
 

        /*    ->editColumn('mybu', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id).'"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            })*/
            
            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                if($model->id != 1){
                    $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })
            ->make(true);

    }

    public function usereditinfo()
    {
        $user = Auth::user();
        return view('website.profile.edit',compact('user'));
    }
    public function userupdateprofile(UserUpdateRequest $request ,User $user)
    {
        $user = Auth::user();
        $user->fill($request->all())->save();
        return Redirect::back()->withFlashMessage('the updated has been completed successfully');
    }
    public function changepassword(UserUpdatePassword $request ,User $user)
    {
        $user = Auth::user();
        if(Hash::check($request->password , $user->password)){
            $hash = Hash::make($request->newpassword);
            $user->fill(['password'=>$hash])->save();
            return Redirect::back()->withFlashMessage('the password correct');
        }else{
        return Redirect::back()->withFlashMessage('the old password doesn’t match with this ');
       }
    }



}
