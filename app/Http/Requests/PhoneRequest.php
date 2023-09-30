<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        $rules = [];
      // lấy ra phương thức hoạt động 
      $currentAction = $this->route()->getActionMethod();
      switch($this->method()) :
        case 'POST' :
            switch($currentAction) :
                case 'add' :
                    $rules = [
                        "name"=>"required",
                        "image"=>"required|image|mimes:jpeg,jpg,png|max:5120",
                        "price"=>"required",
                        "description"=>"required",
                        "category_id"=>"required"
                    ];
                    break;
                endswitch;
            endswitch;
        
        return $rules;
       
    }
}
