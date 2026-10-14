<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Book;

// File: app/Models/Category.php
class Category extends Model
{
    protected $fillable = ['nama'];

    public function books(): HasMany
{
    return $this->hasMany(Book::class);
}
}