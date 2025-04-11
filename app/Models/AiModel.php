<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_id',
        'name',
        'description',
        'ai_model_type',
        'ios_model_type',
        'prompt_engineering',
        'provider_id',
        'ad_type',
        'delay',
        'image',
        'popularity',
        'is_default',
        'status',
        'added_date',
    ];

    protected $casts = [
        'popularity' => 'boolean',
        'is_default' => 'boolean',
        'status' => 'boolean',
        'added_date' => 'datetime',
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function activities()
    {
        return $this->morphMany(ActivityLog::class, 'model');
    }
}
