<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getProgramSession()
    {
        return $this->hasOne(ProgramSession::class,'id', 'program_session_id');
    }

    public function getUsers()
    {
        return $this->hasOne(User::class,'id', 'user_id');
    }

}
