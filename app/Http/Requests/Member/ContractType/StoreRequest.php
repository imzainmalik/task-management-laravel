<?php

namespace App\Http\Requests\Member\ContractType;

use App\Http\Requests\CoreRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends CoreRequest
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
            'name' => 'required|unique:contract_types,name,null,null,company_id,' . company_setting()->id
        ];
    }

}
