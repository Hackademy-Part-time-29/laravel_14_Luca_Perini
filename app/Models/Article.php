<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    protected $fillable = ['title' , 'body', 'cover', 'author_id'];
    use HasFactory;

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
