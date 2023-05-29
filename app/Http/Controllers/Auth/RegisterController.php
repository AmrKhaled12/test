<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidInsertRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    use ResponeTrait;
    public function index(){
        return view('auth.register');
    }

    public function insert(ValidInsertRequest $request){

        $file_name=$this->save_photo($request->photo,'images/profiles');

        User::create([
            'photo'=>$file_name,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return response('done');
    }


    public function DeleteAll(){
        DB::table('users')->truncate();
        return response('done');
    }

    public function showAll(){
     $users= User::get();
     $items=[];
     foreach ($users as $item){
         $items['name']=$item->name;
         $items['email']=$item->email;


     }

     return $this->respone_trait($items,200,'ok');
    }

   public function showone($id)
   {
       $users = User::findOrFail($id);


       return response($users);

   }

}
