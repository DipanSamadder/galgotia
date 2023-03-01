<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibrarySetup extends Model
{
    use HasFactory;
    
    public function institutes(){
        return $this->belongsTo(Institute::class, 'institutes_id');
    }
}
