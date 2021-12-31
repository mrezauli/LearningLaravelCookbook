<?php

namespace App\Models;

use Wildside\Userstamps\Userstamps;
use Laratrust\Models\LaratrustPermission;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends LaratrustPermission
{
    use SoftDeletes, Userstamps;

    public $guarded = [];
}