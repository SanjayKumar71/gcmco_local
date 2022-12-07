<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestSpeaker extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getSpeaker(){
        return $this->belongsTo(Speaker::class, 'speaker_id');
    }
}
