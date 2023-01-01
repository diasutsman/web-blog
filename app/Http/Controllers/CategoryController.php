<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('categories', [
      'title' => 'Post Categories',
      'categories' => Category::all(),
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Category $category)
  {
    return view('posts', [
      'title' => "Post by category : " . $category->name,
      'posts' => $category->posts->load('category', 'author'),
    ]);
  }
}
