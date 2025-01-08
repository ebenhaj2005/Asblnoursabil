<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
};
