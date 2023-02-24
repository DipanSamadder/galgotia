<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryBookIssue extends Model
{
    use HasFactory;

    public function books(){
        return $this->belongsTo(LibraryBook::class, 'library_books_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
