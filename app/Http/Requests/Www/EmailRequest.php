<?php

namespace App\Http\Requests\Www;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Helper;
use App;

class EmailRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $slug = Helper::slug();
        $rules = [];

        if ($slug == __('route-email-contact')) {
            $rules = [
                'area_of_interest' => 'required|max:255',
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'present|max:255',
                'message' => 'required',
                'g-recaptcha-response' => 'required',
            ];
        } elseif ($slug == __('route-email-subscribe')) {
            $rules = ['email_subscribe' => 'required|email|max:255'];
        } elseif ($slug == __('route-email-download-brochure')) {
            $rules = ['email_download' => 'required|email|max:255'];
        } elseif ($slug == __('route-email-join-investors')) {
            $rules = ['email_join' => 'required|email|max:255'];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'g-recaptcha-response.required' => __('Please, click on the checkbox “I`m not a robot”!'),
        ];
    }
}
