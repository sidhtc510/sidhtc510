<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    // use HasFactory;
    
    use Sluggable;


    protected $fillable = [
        'title', 'description', 'content', 'category_id', 'thumbnail', 
    ];



    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function uploadImage(Request $request, $image = null){
        
        if ($request->hasFile('thumbnail')) {
          if($image){
            Storage::delete($image);
          }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("images/{$folder}");
        }
        // return $image;
        return null;
    }

    public function getImage(){
        if(!$this->thumbnail){
            return asset("noimage.jpg");
        }
        return asset("uploads/{$this->thumbnail}");
    }


    public function getPostDate(){
        // return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
        return Carbon::parse($this->created_at)->diffForHumans();
    }


    public function scopeLike($query, $s){
        return $query->where('title', 'LIKE', "%{$s}%")->orWhere('content', 'LIKE', "%{$s}%");
    }
}
