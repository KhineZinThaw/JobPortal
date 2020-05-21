<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded=['category'];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
}
