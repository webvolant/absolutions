<?php

namespace App\Http\Controllers;



use webvolant\abposts\Models\Post;
use Illuminate\Support\Facades\Mail;


class PortfolioController extends Controller
{

    public function index(){
        return view('abtemplate.index');
    }

    public function jobs(){
        return view('abtemplate.jobs');
    }

    public function clients(){
        return view('abtemplate.clients');
    }

    public function job_detail($link){
        $job = Post::where('link','=',$link)->get();
        return view('abtemplate.detail', array('job'=>$job));
    }

    public function contacts(){
        if (\Request::all()){
            $validator = \Validator::make(\Request::all(), [
                'email' => 'required',
                'title' => 'required',
            ]);
            if ($validator->fails()) {
                return \Redirect::to('contacts')->withErrors($validator)->withInput();
            }
            else{
                Mail::later(10, 'emails.welcome', array('key' => 'value'), function($message)
                {
                    $message->from( \Request::get('email'), \Request::get('title') );
                    $message->to('box@abs-it.net', 'Anton Barkalov')->subject('ABS-IT.NET - новый клиент написал через форму сайта...');
                });
                return \Redirect::route('contacts')->with('message', 'Вы успешно отправили сообщение...');
            }
        }
        return view('abtemplate.contact');
    }

}
