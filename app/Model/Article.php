<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * id - integer unique
     * author_id - foreign key to author
     * title - 255 character limit
     * url - Unique
     * content - text
     * createdAt - datetime
     * updatedAt - datetime
     */
    protected $fillable = [
        'id', 'author_id', 'title', 'url', 'content'
    ];
}
