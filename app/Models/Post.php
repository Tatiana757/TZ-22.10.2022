<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_id",
        "title",
        "preview",
        "description",
        "thumbnail"
    ];

    public function comments(){
        $this->hasMany(Comment::class)->orderBy("created_at");
    }

    public function category(){
        $this->belongsTo(Category::class);
    }
}
