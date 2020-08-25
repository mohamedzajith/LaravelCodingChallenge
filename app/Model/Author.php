<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * id - integer unique
     * name - 255 character limit
     */
    protected $fillable = [
        'id', 'name'
    ];
}
