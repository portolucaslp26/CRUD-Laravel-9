<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Book extends Model
{
    protected $table='books';

    protected $fillable = ['title', 'pages', 'id_user', 'price'];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
}
