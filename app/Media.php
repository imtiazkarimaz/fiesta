<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    protected $primaryKey = 'Media_id';
    protected $table = 'Media';
    public $timestamps = false;
}
