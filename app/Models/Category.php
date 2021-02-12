<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $appends=[
        'parent'
    ];

    #One to Many
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    #One to Many inverse
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    #One to Many inverse
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
