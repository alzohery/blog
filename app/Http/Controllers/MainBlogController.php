<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainBlogController extends Controller
{
    //define controller
    public function testAction(){
        return view('blog');
    }
}
