<?php

namespace App\Http\Requests\Profile;

use App\Http\Requests\AdminBaseRequest;

class CreateProfileRequest extends AdminBaseRequest
{
    public function rules()
    {
        return [
            'first_name' => [
                'required',
                'string',
                'min:2',
            ],
            'last_name' => [
                'required',
                'string',
                'min:2',
            ],
            'role' => [
                'required',
                'string',
            ],
            'started_at' => [
                'required',
                'string',
            ],
            'visible' => [
                'nullable',
                'string',
            ],
        ];
    }
}
