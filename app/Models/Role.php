<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends LaratrustRole
{
    use SoftDeletes, Userstamps;

    public $guarded = [];
}