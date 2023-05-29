<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\ValidInsertRequest;

trait ResponeTrait
{
    public function respone_trait($data=[],$status=null,$msg=null){
        $array=[
            'data'=>$data,
            'status'=>$status,
            'message'=>$msg
            ];
      return response($array);
    }

    public function save_photo($photo,$folder){
        $file_extention=$photo->getClientOriginalExtension();
        $file_name=time().'.'.$file_extention;
        $path=$folder;
        $photo->move($path,$file_name);

        return $file_name;
    }
}
