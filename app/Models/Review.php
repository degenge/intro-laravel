<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * @var array|string[]
     */
    protected array $fillable = [
        'name_first',
        'name_last',
        'rate',
        'comment',
    ];

}
