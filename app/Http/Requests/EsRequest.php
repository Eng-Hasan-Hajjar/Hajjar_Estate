<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
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
                   'es_image'=>'mimes:png,jpg,jpeg',


        ];
    }
}
