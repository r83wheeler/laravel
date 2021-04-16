<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
  public function index(){
    return Author::all();
  }
  
  public function create(Request $request){
    
    $author = new Author();
    $author->name = $request->input('name', 'none');
    $author->dob = $request->input('dob');
    
    $author->save();
  }
  
  public function update($id){
    
  }
}
