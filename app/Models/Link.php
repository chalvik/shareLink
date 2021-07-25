<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    public $fillable = [
        'url',
        'hash'
    ];

    /**
     * @param $hash
     * @return mixed
     */
    public static function findOrFailForHash($hash)
    {
        return Link::where(['hash'=>$hash])->firstOrFail();
    }

}
