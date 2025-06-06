<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_name',
        'account_type',
        'contact_person',
        'email',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];
}
