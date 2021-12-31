<?php

namespace App\Models;

use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }
}