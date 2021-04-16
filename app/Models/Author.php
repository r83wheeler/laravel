<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  
  use HasFactory;
  protected $table = 'author';
  protected $primaryKey = 'id';
  public $incrementing = true;
  public $timestamps = true;
  
  //public function checkouts()
  //{
    /return $this->hasMany('Book::class');
  //}
}