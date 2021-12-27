<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    // public function ticket()
    // {
    //     return $this->belongsTo('App\Models\Ticket');
    // }

    /**
     * Get the parent commentable model (post or ticket).
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}