<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibrarySetupFine extends Model
{
    use HasFactory;

    public function setup(){
        return $this->belongsTo(LibrarySetup::class);
    }
}
