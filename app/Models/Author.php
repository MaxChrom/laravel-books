<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
    public function publishers()
    {
        return $this->belongsToMany(Publisher::class);
    }
    use HasFactory;
}
