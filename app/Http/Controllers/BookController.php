<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
  public function index(){
    
    return Book::all();//read
  }
  
  public function show($id){
    return Book::find($id); //Read individual book
  }
  
  public function create(Request $request){
    //book create, save
//     $book = new book();
//     $book->title = "Clean Code";
//     $book->isbn = "";
//     $book->pages = 200;
//     $book->cost = 20.0;
//     $book->value = 20.0;
//     $book->current_condition = 0;
    
//     $book->save(); //create
  }
  
  public function update($id){
    $book = Book::find($id);
    $book->cost = 24.0;
    
    $book->save(); //update 
  }
  
  public function destroy($id){
    Book::find($id)->delete(); //delete , hard delete
  }
}
