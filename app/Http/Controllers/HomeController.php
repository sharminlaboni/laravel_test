<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogpost;

class HomeController extends Controller
{
    function index(){
        $blog = Blogpost::all();
        if ($blog) {
            return view('main', compact('blog'));
        } else {
            return view('main');
        }
    }
}
