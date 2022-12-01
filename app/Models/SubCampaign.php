<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCampaign extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getCampaign(){
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }
}
