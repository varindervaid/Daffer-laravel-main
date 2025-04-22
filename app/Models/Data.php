<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function folder()
    {
        return $this->belongsTo(Folder::class, 'folder_id');
    }

    // In Data.php
    public function images()
    {
        return $this->hasMany(DataImage::class, 'data_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
