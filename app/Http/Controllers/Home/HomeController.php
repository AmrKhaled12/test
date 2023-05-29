<?php

namespace App\Http\Controllers\Home;

use App\Events\VideoViewer;
use App\Http\Controllers\Controller;
use App\Models\View;

class HomeController extends Controller
{

  public function get_video(){
      $video=View::first();
     event(new VideoViewer($video));
      return view('home.home')->with('video',$video);
  }

}
