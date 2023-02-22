<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function students(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sessions(){
        return $this->belongsTo(ProgramSession::class, 'program_sessions_id');
    }

    public function institutes(){
        return $this->belongsTo(Institute::class, 'institutes_id');
    }

    public function programs(){
        return $this->belongsTo(Program::class, 'programs_id');
    }
}
