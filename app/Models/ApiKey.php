<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'key',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'last_call_at' => 'datetime',
    ];

    protected $hidden = [
        'key',
    ];

    public function activities()
    {
        return $this->morphMany(ActivityLog::class, 'model');
    }
}
