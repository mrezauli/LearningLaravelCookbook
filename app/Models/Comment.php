<?php

namespace App\Models;

use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

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