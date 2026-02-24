<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use App\Models\User;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    // Create a wallet for a user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
        ]);

        $wallet = Wallet::create($validated);

        return response()->json($wallet, 201);
    }

    // View a specific wallet (balance + transactions)
    public function show(Wallet $wallet)
    {
        $wallet->load('transactions');

        return response()->json([
            'id' => $wallet->id,
            'name' => $wallet->name,
            'balance' => $wallet->balance,
            'transactions' => $wallet->transactions,
        ]);
    }
}