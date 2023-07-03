<?php

namespace App\Models;

use App\Models\Post;
// use App\Models\Category;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    public function posts(){
        return $this->hasMany(Post::class);

        $posts = Post::with('category')->get();

        foreach ($posts as $post) {
            $category = $post->category;
            
            $categoryId = $category->id;
            $categoryName = $category->name;
            
        }
    }


    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }

    $category = Category::find($categoryId);
    $latestPost = $category->latestPost;


    
    

}
