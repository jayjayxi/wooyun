<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'title','uuid','path','author','column','thumbnail','viewnum'
    ];
}
