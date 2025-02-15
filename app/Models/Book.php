<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    use HasFactory; // memungkinkan pengguna factory untuk seeding data
    
    
    // 
    protected $table = 'books';

    // 
    protected $fillable = [
        'author',
        'title',
        'year',
    ];
};
