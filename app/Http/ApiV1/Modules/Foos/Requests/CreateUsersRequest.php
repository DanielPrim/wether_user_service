<?php

namespace App\Http\ApiV1\Modules\Foos\Requests;

use App\Http\ApiV1\Support\Requests\BaseFormRequest;

class CreateUsersRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'region' => ['required', 'string'],
        ];
    }
}