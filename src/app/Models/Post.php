<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];
    //хиден не сработает т.к. используется ресурс который явно указывает какие поля вернутся
    protected $hidden = ['id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
