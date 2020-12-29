<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";
    public function picture()
    {
        return $this->hasMany('App\ProjectPicture');
    }
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function product()
    {
        return $this->belongsTo('App\product');
    }


}
