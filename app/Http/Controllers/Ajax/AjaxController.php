<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AjaxController extends Controller
{
     public function index(){
         $posts=Post::get();
        return view('ajax.home',compact('posts'));
     }

     public function edit($id){
         $id=decrypt($id);
         $data=Post::where('id',$id)->get();
         return $data;
     }

}
