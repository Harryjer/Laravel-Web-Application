<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'title', 'start_date', 'end_date','no_of_works','location'
    ];
}
