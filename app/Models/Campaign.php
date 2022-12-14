<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getTransaction(){
        return $this->hasMany(Transaction::class, 'campaign_id');
    }

    public function getSubCampaigns(){
        return $this->hasMany(SubCampaign::class, 'campaign_id')->where('status', '1');
    }

}
