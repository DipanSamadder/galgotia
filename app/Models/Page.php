<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;


    public function parents(){
        return $this->belongsTo(Page::class, 'parent', 'id');
    }


  
}
