<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataImage extends Model
{
    use HasFactory;
    protected $guarded = [];

    // In DataImage.php
public function data()
{
    return $this->belongsTo(Data::class);
}

}
