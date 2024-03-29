<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class slider extends Model
{
  use HasFactory;


  protected $fillable = [
    'thumbnail',
  ];


  public static function uploadImage(Request $request, $image = null)
  {

    if ($request->hasFile('thumbnail')) {
      if ($image) {
        Storage::delete($image);
      }
      $folder = date('Y-m-d');

      return $request->file('thumbnail')->store("images/{$folder}");
      // Storage::putFile("images/{$folder}", $request->file('thumbnail'), 'public');
      
      // return $image;
    }
    // return $image;

    return null;
  }



  public function getImage()
  {

    return asset("uploads/{$this->thumbnail}");
  }
}
