<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'user_id', 'title', 'message',
    ];

    //ユーザーとリレーション
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
