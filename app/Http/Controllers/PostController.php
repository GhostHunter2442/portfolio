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

        $post_home = Post::where('slug','home')->first();
        $post_savedata = Post::where('slug','savedata')->first();
        $post_clocktime = Post::where('slug','clocktime')->first();
        $post_shop = Post::where('slug','shop')->first();
        $post_booking = Post::where('slug','booking')->first();
        $Key = 'blog' . $post_home->id;
        if (!Session::has($Key)) {
           $post_home->increment('view_count', 1);
           Session::put($Key, 1);
       }

        return view('home',compact('post_home','post_savedata','post_clocktime','post_shop','post_booking'));
    }

    public function savedata(){

        $post = Post::where('slug','savedata')->first();
        $Key = 'blog' . $post->id;
        if (!Session::has($Key)) {
           $post->increment('view_count', 1);
           Session::put($Key, 1);
       }

        return view('savedata');

    }

    public function clocktime(){
        $post = Post::where('slug','clocktime')->first();
        $Key = 'blog' . $post->id;
        if (!Session::has($Key)) {
           $post->increment('view_count', 1);
           Session::put($Key, 1);
       }
        return view('clocktime');
    }

    public function shop(){
        $post = Post::where('slug','shop')->first();
        $Key = 'blog' . $post->id;
        if (!Session::has($Key)) {
           $post->increment('view_count', 1);
           Session::put($Key, 1);
       }
        return view('shop');
    }


    public function booking(){
        $post = Post::where('slug','booking')->first();
        $Key = 'blog' . $post->id;
        if (!Session::has($Key)) {
           $post->increment('view_count', 1);
           Session::put($Key, 1);
       }
        return view('booking');
    }

    public function dowload(){
        $file= public_path(). "/images/Resume.jpg";

        $headers = array(
                  'Content-Type: application/img',
                );

        return Response::download($file, 'Resume.jpg', $headers);
    }

}
