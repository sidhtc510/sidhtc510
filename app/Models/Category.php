<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{

    use Sluggable;

    protected $guarded = [
        'checkSlug'
    ];


    // Категории бесконечной вложенности при помощи рекурсивных отношений hasMany
    // https://laravel.demiart.ru/recursive-hasmany-relationship-with-unlimited-subcategories/
    public function categories() 
    {
        return $this->hasMany(Category::class)->with('childrenCategories');
    }

    public function childrenCategories()
    {
       return  $this->hasMany(Category::class)->with('categories');
      
    }

    public function parentCategory()
    {
       return  $this->belongsTo(Category::class, 'category_id', 'id');
    }
  



    public function posts()
    {
        return $this->hasMany(Post::class);
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
