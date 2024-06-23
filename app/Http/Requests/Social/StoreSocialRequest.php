<?php

namespace App\Http\Requests\Social;

use Illuminate\Foundation\Http\FormRequest;

class StoreSocialRequest extends FormRequest
{
    /**
     * Determine if the Clientis authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
protected   $minpass=8;
protected   $maxpass=16;
protected  $minMobileLength=10;
protected $maxMobileLength=15;
protected $maxlength=500;
protected $alphaexpr='/^[\pL\s\_\-\0-9]+$/u';
protected $alphaAtexpr='/^[\pL\s\_\-\@\.\0-9]+$/u';
    public function rules(): array
    {
       
      
       return[
         
           'name'=>'required|string|regex:'.$this->alphaAtexpr,   
         //  'code'=>'required|string|regex:'.$this->alphaAtexpr,  
           'code'=>'required|string||unique:socials,code|regex:'.$this->alphaAtexpr,
           'link'=>'nullable|string', 
           'htmlcode'=>'nullable|string',   
          
       ];   
    
    }
    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
  
   return[   
      // 'first_name.required'=> __('messages.this field is required',[],'en') ,
      // 'last_name.required'=>__('messages.this field is required',[],'en') ,   
     'name.required'=> __('messages.this field is required',[],'ar') ,
  //   'name.alpha_num'=>'The name format must be alphabet',
     'code.unique'=>__('messages.The user_name is already exist',[],'ar'),
  
     'name.regex'=>__('messages.must be alpha',[],'en') ,
     
    ];
    
}

}
