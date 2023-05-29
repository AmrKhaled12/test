<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use App\Models\User;

class RelationController extends Controller
{
    public function one_to_one(){
       $user=User::with(['phone'=>function($q){
           $q->select('mobile','user_id');
       }])->find(1);
       return response($user);

//       return User::whereHas('phone')->get();
//       ###############################################################
//        return User::whereDoesntHave('phone')->get();
    }

    public function one_to_many(){
        $user=User::with(['post'=>function ($q){
            $q->select('name','body','user_id');
        }])->find(1);
//        $posts=$user->post;
//        foreach ($posts as $post){
//            echo $post->body.'<br>';
//        }
        return response($user);

    }

    public function many_to_many(){
      return $users= User::with('hobby')->find(1);

    }
}
