<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getCampaign(){
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }

    public function getSubCampaign(){
        return $this->belongsTo(SubCampaign::class, 'sub_campaign_id');
    }
}
