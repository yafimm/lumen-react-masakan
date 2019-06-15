<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{

    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
