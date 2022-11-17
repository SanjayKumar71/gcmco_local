<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    /**
     * Get category for the program.
    */
    public function programs()
    {
        return $this->hasMany(Programs::class);
    }

    /**
     * Get parent for the category.
    */
    public function categoryParent()
    {
        return $this->belongsTo(Category::class,'parent');
    }
}
