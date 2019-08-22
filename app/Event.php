<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Event extends Model
{
    //
    use SoftDeletes;

    public $timestamps = false;
    protected $guarded = [];

    protected $dates = ['deleted_at'];
}
