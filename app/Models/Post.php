<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
  use HasFactory, Sluggable;

  // protected $fillable = ['title', 'excerpt', 'body',];

  public $guarded = ['id'];

  public $with = ['author', 'category'];

  public function scopeFilter($query, array $filters)
  {
    $query->when($filters['search'] ?? false, function ($query, $search) {
      return $query->where('title', 'like', '%' . $search  . '%')
        ->orWhere('body', 'like', '%' . $search  . '%');
    });

    $query->when($filters['category'] ?? false, function ($query, $category) {
      $query->whereHas(
        'category',
        fn ($query) =>
        $query->where('slug', $category)
      );
    });

    $query->when($filters['author'] ?? false, function ($query, $username) {
      $query->whereHas(
        'author',
        fn ($query) =>
        $query->where('username', $username)
      );
    });
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function author()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function getRouteKeyName()
  {
    return 'slug';
  }

  public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
