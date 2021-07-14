<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    //
    public function index(){
        $blog= Blog::latest()->paginate(10);
        return view('blog',compact('blog'));
    }

    public function create(){
        return view('create');
    }
}
