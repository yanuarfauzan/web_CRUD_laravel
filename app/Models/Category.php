<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'category_name'
    ];


    public function posts()
    {
        return $this->hasMany(PostModel::class, 'category_id', 'id');
    }
}
