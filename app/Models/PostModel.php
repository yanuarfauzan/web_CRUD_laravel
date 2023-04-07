<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'content',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
