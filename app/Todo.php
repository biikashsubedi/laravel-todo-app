<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
      'title', 'body', 'status', 'type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
