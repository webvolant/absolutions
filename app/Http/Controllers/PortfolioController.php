<?php

namespace App\Http\Controllers;



use webvolant\abposts\Models\Post;

class PortfolioController extends Controller
{

    public function index(){
        return view('abtemplate.index');
    }

    public function jobs(){
        return view('abtemplate.jobs');
    }

    public function job_detail($link){
        $job = Post::where('link','=',$link)->get();
        return view('abtemplate.detail', array('job'=>$job));
    }

}
