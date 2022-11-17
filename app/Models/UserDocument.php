<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = ['download_url'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getDownloadUrlAttribute(){
        return route('user.downloadFile',$this->id);
    }
}
