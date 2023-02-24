<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryBook extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(LibraryCategory::class, 'library_categories_id');
    }

    public function authors(){
        return $this->belongsTo(LibraryAuthor::class, 'library_authors_id');
    }

    public function publishers(){
        return $this->belongsTo(LibraryPublisher::class, 'library_publishers_id');
    }
}
