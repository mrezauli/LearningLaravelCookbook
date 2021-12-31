<?php

namespace App\Models;

use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getTitle()
    {
        return $this->title;
    }

    // public function comments()
    // {
    //     return $this->hasMany('App\Models\Comment', 'post_id');
    // }

    /**
     * Get all of the ticket's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}