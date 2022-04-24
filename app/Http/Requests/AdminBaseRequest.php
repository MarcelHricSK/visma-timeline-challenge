<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AdminBaseRequest extends FormRequest
{
    public function rules()
    {
        return [];
    }
}
