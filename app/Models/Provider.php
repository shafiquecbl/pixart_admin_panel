<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'api_key',
        'api_url',
        'queue_url',
        'api_key_location',
        'safety_checker',
        'safety_checker_type',
        'tomesd',
        'karras_sigmas',
        'multi_lingual',
        'panorama',
        'self_attention',
        'upscale',
        'clip_skip',
        'highres_fix',
        'samples',
        'inference_steps',
    ];

    protected $casts = [
        'safety_checker' => 'boolean',
        'tomesd' => 'boolean',
        'karras_sigmas' => 'boolean',
        'multi_lingual' => 'boolean',
        'panorama' => 'boolean',
        'self_attention' => 'boolean',
        'highres_fix' => 'boolean',
        'upscale' => 'integer',
        'clip_skip' => 'integer',
        'samples' => 'integer',
        'inference_steps' => 'integer',
    ];

    protected $hidden = [
        'api_key',
    ];

    public function aiModels()
    {
        return $this->hasMany(AiModel::class);
    }

    public function activities()
    {
        return $this->morphMany(ActivityLog::class, 'model');
    }
}
