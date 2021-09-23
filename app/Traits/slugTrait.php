<?php
namespace App\Traits;

use Illuminate\Support\Str;

trait slugTrait{
    static public function slugExist($slug){
       if( static::where('slug','=',$slug)->exists()){
           $slug = $slug.Str::random(2);
           return self::slugExist($slug);
       }
       else{
            return $slug;
       }
    }
}