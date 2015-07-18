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
        //Mail::later(5, 'emails.welcome', $data, function($message)
        if (\Request::all()){
            $validator = \Validator::make(\Request::all(), [
                'email' => 'required',
                'title' => 'required',
            ]);
            if ($validator->fails()) {
                return \Redirect::to('contacts')->withErrors($validator)->withInput();
            }
            else{
                Mail::send('emails.welcome', array('key' => 'value'), function($message)
                {
                    $message->to('barkalov_anton@mail.ru', 'Anton Barkalov')->subject('Заказ!');
                });
                return \Redirect::to('/');
            }
        }
        return view('abtemplate.contact');
    }

}
