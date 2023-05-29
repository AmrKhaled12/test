<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $fillable =['hobbies'];
    protected $hidden =['pivot'];
    use HasFactory;
    public function user(){
        return $this->belongsToMany(User::class,'users-and-hobbies','hobby_id','user_id');
    }
}
