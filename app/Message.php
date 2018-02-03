<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
      'user_id', 'product_id', 'message', 'quantity'
    ];
    public function getFirstNameAttribute($value) {
      return ucfirst($value);
    }
    public function getLastNameAttribute($value) {
      return ucfirst($value);
    }
    public function getTimeAttribute($value) {
      return date_format($this->created_at, 'd M Y, h:i A');
    }
}
