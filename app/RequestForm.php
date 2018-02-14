<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{

    protected $table = "requests";

    protected $fillable = [
      'user_id', 'product', 'message', 'read'
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
    public function getShortMessageAttribute() {
      return substr($this->message, 0, random_int(30, 50)) . '...';
    }
}
