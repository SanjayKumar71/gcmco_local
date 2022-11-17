<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * Get images for the program.
    */
    public function programImages()
    {
        return $this->hasMany(ProgramImages::class,'program_id');
    }

    public function programType()
    {
        return $this->belongsTo(ProgramType::class,'program_type');
    }

    public function programSession()
    {
        $currentDate = date("Y-m-d");
        return $this->hasMany(ProgramSession::class,'program_id')->where('date','>=',$currentDate);
    }
}
