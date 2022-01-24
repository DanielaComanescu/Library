<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //The books that belong to the genre

    public function books() {
        return $this->belongsToMany(Book::class);
    }
}
