<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyCount extends Model
{
    use HasFactory;

    protected $fillable = ['count','date'];

    public $timestamps = false;


    static function countToday(string $date)
    {
        return self::where('date',$date)->first();
    }
}
