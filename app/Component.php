<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $table = 'component';

    protected $dates = ['deleted_at','update_at','build_at'];
}
