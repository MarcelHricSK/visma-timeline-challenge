<?php

namespace App\Http\Requests\Event;

class UpdateEventRequest extends \App\Http\Requests\AdminBaseRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'min:3',
            ],
            'slug' => [
                'required',
                'string',
            ],
            'description' => [
                'required',
                'string',
            ],
            'content' => [
                'required',
                'string',
            ],
        ];
    }
}
