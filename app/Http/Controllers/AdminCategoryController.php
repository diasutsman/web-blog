<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
  private const HOME_URL = '/dashboard/categories';
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('dashboard.categories.index', [
      'categories' => Category::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('dashboard.categories.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|max:255|unique:categories',
    ]);

    $validatedData['slug'] = SlugService::createSlug(Category::class, 'slug', $validatedData['name']);
    Category::create($validatedData);

    return redirect(self::HOME_URL)->with('success', 'New category has been added!');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function edit(Category $category)
  {
    return view('dashboard.categories.edit', [
      'category' => $category,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Category $category)
  {
    $validatedData = $request->validate([
      'name' => 'required|max:255|unique:categories,name,' . $category->id . ',id'
    ]);

    $validatedData['slug'] = SlugService::createSlug(Category::class, 'slug', $validatedData['name']);

    Category::where('id', $category->id)
      ->update($validatedData);

    return redirect(self::HOME_URL)->with('success', 'Category has been updated!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy(Category $category)
  {
    Category::destroy($category->id);

    return redirect(self::HOME_URL)->with('success', 'Category has been deleted!');
  }
}
