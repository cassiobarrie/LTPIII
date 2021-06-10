<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index(){
    return view('admin.posts.index');
    }

/* Controler site */
  public function departamentos(){
    return view('admin.posts.departamentos');
}

public function congregacoes(){
    return view('admin.posts.congregacoes');
}

public function about(){
    return view('admin.posts.about');
}







}
