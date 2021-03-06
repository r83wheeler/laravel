<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  
  use HasFactory;
  protected $table = 'books';
  protected $primaryKey = 'id';
  public $incrementing = true;
  public $timestamps = true;
  
   protected $fillable = [
        'title',
        'isbn',
        'pages',
        'cost',
        'excerpt',
        'genre',
    ];
  //public function checkouts()
  //{
    //return $this->hasMany('App\Models\Checkout', 'ref_book_id');
  //}
}