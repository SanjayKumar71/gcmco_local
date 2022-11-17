<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];

    /**
     * Return's page data with media file
     * @param  array $where
     * @return Illuminate\Database\Query\Builder
     */
    public static function getPage(array $where)
    {
        return self::select(
                'pages.*'
            )
            ->where($where)
            ->first();
    }
}
