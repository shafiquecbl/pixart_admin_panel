<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'type',
        'android_ad_id',
        'ios_ad_id',
        'android_status',
        'ios_status',
    ];

    protected $casts = [
        'android_status' => 'boolean',
        'ios_status' => 'boolean',
    ];

    public function activities()
    {
        return $this->morphMany(ActivityLog::class, 'model');
    }
}
