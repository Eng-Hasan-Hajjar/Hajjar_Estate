<?php

namespace App\Http\Controllers;
use App\http\Requests\EsRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {   $contact2=$contact->find(1);
        return view('admin.contact.index',compact('contact2'));
    }

     public  function  store(ContactRequest $request , Contact $contact){
         $contact->create($request->all());
         return Redirect::back()->withflashmessage('the message has been sent successfully');
     }


    public function edit($id,Contact $contact)
    {
        $contact=$contact->find($id);
        return view('admin.contact.edit',compact('contact'));
    }

    public function update($id, ContactRequest $request, Contact $contact)
    {
        $contact = $contact->find($id);
        $contact-> fill($request->all())->save();
        return view('admin.contact.index')->withFlashMessage('the contact has been updated successfully');
    }

    public function destroy($id,Contact $contact)
    {

            $contact->find($id)->delete();
            return redirect('/adminpanel/contact')->withFlashMessage('the contact has been deleted successfully');

    }

    public function anyData(Contact $contact)
    {

        $contacts = $contact->all();
        return DataTables::of($contacts)
            ->editColumn('contact_name', function ($model) {//$model is contact of $contacts
                return \Html::link(url('/adminpanel/contact/'.$model->id.'/edit'),$model->contact_name);
            })
            ->editColumn('contact_email',function ($model)
            {
                return $model->contact_email;
            })
//            ->editColumn('contact_subject',function ($model)
//            {
//                return $model->contact_subject;
//            })
//            ->editColumn('contact_message',function ($model)
//            {
//                return $model->contact_message;
//            })

            ->editColumn('view',function ($model)
            {
                return $model->view == 0 ?'old message' :'new message';
            })
            ->editColumn('contact_type',function ($model)
            {
                $type = contact();
                return $type[$model->contact_type];

            })
            ->editColumn('controll1', function ($model) {
                $all = \Html::link(url('/adminpanel/contact/' . $model->id . '/edit'), 'edit',['class'=>'btn btn-info btn-circle btn-sm']);
                return $all;
            })
            ->editColumn('controll2', function ($model) {

                $all = \Html::link(url('/adminpanel/contact/'.$model->id.'/delete'),'delete',['class'=>'btn btn-danger btn-circle btn-sm']);

                return $all;
            })
            ->make(true);
    }
}
