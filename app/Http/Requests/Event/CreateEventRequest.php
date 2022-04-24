<?php

namespace App\Http\Requests\Event;

class CreateEventRequest extends \App\Http\Requests\AdminBaseRequest
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
            'type' => [
                'required',
                'string',
                'exists:event_types,id',
            ],
            'image' => [
                'nullable',
                'string',
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'content' => [
                'nullable',
                'string',
            ],
            'location' => [
                'nullable',
                'string',
            ],
            'start_date' => [
                'required',
                'string',
            ],
            'end_date' => [
                'nullable',
                'string',
            ],
            'visible' => [
                'nullable',
                'string',
            ],
        ];
    }
}
