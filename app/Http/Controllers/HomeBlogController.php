<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    function index(){
        $data = [
            'blog'=> Blog::get(),
            'content' => 'home/blog/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function show(string $id)
    {
        
        $data = [
            'blog'  => Blog::find($id),//Buat nyari halaman atau variabel $id
            'content' => 'home/blog/show'
        ];

        return view('admin.layouts.wrapper', $data);
    }
}
