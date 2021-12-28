<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'Products';
    protected $fillable =[
        'name',
        'description',
        'image',

     ];
}
