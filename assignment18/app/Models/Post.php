<?php

namespace App\Models;

use App\Models\Category;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Collection;

class Post extends Model
{
    // use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function countByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }




    use SoftDeletes;

    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
    


}
