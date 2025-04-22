<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $guarded=[];


    // public function data() {
    //     return $this->belongsTo(Data::class,'folder_id','id');
    // }

    public function data()
    {
        return $this->hasMany(Data::class, 'folder_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
