<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    public $timestamps = false;
    protected $table = 'lista';

    protected $fillable = ['song_id', 'user_id'];


    public function song()
    {
        return $this->hasOne('\App\Song', 'id', 'name', 'url_source', 'artist_id');
    }

    public function user()
    {
        return $this->hasOne('\App\User', 'id', 'email', 'password', 'is_admin');
    }
}
