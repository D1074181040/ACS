<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    //
    protected $table='visitors';
    public $primaryKey='id';
    public $timestamps=true;
}
