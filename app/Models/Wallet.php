<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Transaction;

class Wallet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
    return $this->hasMany(Transaction::class);
    }
    //calculating wallet balance
    public function getBalanceAttribute()
    {
    $income = $this->transactions()
        ->where('type', 'income')
        ->sum('amount');

    $expense = $this->transactions()
        ->where('type', 'expense')
        ->sum('amount');

    return $income - $expense;
    }
}
