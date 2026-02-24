<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Wallet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
    ];

    // Relationship back to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
