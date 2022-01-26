<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class slider extends Model
{
<<<<<<< HEAD
  use HasFactory;


  protected $fillable = [
    'thumbnail',
  ];



=======
    use HasFactory;
  

    protected $fillable = [
         'thumbnail', 
    ];



    
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
>>>>>>> fe6f1132c4b434fa2da574da5ce57a978c0adad6

  public static function uploadImage(Request $request, $image = null)
  {

    if ($request->hasFile('thumbnail')) {
      if ($image) {
        Storage::delete($image);
      }
      $folder = date('Y-m-d');

      // dd($request->file('thumbnail'));

      return $request->file('thumbnail')->store("images/{$folder}");
    }
    // return $image;
    return null;
  }



  public function getImage()
  {

    return asset("uploads/{$this->thumbnail}");
  }
}
