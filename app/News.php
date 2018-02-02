<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
      'title', 'content', 'image', 'author', 'category'
    ];

    public function getShortContentAttribute() {
      return substr($this->content, 0, random_int(120, 220)) . '...';
    }
}
