<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Rules\Captcha;

class ContactController extends Controller
{
    public function send(Request $request){
        if($request->ajax()){
            $validation = Validator::make($request->all(), [
                'name' => 'required|max:20|regex:/(^([a-zA-Z _]+)(\d+)?$)/u',
                'email' => 'required|email|max:50',
                'tel' => 'required|numeric',
                'message' => 'required|max:1000|regex:/(^([a-zA-Z _]+)(\d+)?$)/u',
                'g-recaptcha-response' => new Captcha()
            ]);
            if (!$validation->passes()) {
                return response()->json(['error'=>$validation->errors()]);
            }

            $data = [
                'name' => request('name'),
                'email' => request('email'),
                'tel' => request('tel'),
                'message' => request('message')
            ];
            Mail::to(env('MAIL_TO_ADDR'))->send(new ContactFormMail($data));

            return json_encode(['status' => 'ok']);
        }
    }
}
