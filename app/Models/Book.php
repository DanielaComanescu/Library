<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  // THe author that writes the book
  public function author() { 
    return $this->belongsTo(Author::class);

  }

  //the genres that belong to the book
  public function genres() {
    return $this->belongsToMany(Genre::class);
  }
}
