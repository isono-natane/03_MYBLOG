<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Article;

class HomeController extends Controller
{
    // public function index(){
    //     return view('home');
    // }
    public function index()
    {
        $articles = \Auth::user()->articles()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'articles' => $articles,
        ];
        return view('home', $data);
    }
}
