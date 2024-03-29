<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(User $author)
  {
    return view('posts', [
      'title' => "Post By Author : " . $author->name,
      'posts' => $author->posts,
    ]);
  }
}
