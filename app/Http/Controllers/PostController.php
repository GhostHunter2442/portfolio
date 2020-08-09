<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use App\Post;
use DB;
class PostController extends Controller
{
    public function index(){

        $post = Post::where('slug','home')->first();
        $Key = 'blog' . $post->id;
        if (!Session::has($Key)) {


           $post->increment('view_count', 1);
           Session::put($Key, 1);
       }

        return view('home',compact('post'));
    }

    public function savedata(){
        return view('savedata');
    }

    public function clocktime(){
        return view('clocktime');
    }

    public function shop(){
        return view('shop');
    }

    public function dowload(){
        $file= public_path(). "/images/Resume.jpg";

        $headers = array(
                  'Content-Type: application/img',
                );

        return Response::download($file, 'Resume.jpg', $headers);
    }

}
