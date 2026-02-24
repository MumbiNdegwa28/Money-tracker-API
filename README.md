# Money Tracker API

A simple **Money Tracker API** built with **Laravel 12** that allows users to manage multiple wallets and track income and expenses. The API is designed for consumption by a frontend application.  

## Features

- Create a user account (no authentication required)
- Create multiple wallets for a user
- Add transactions (Income / Expense) to a wallet
- View user profile with:
  - All wallets
  - Balance of each wallet
  - Total balance across all wallets
- View a single wallet with:
  - Wallet balance
  - All transactions for that wallet
- Input validation ensures:
  - Positive amounts
  - Valid transaction types
  - Required fields

---

## Technical Details

- **Framework:** Laravel 12  
- **Database:** MySQL / MariaDB  
- **Models:** User, Wallet, Transaction  
- **Relationships:**  
  - User `hasMany` Wallets  
  - Wallet `belongsTo` User  
  - Wallet `hasMany` Transactions  
- **API Routes:** Defined in `routes/api.php`  
- **Validation:** Handled in controllers using Laravel’s request validation  
- **Dynamic Balances:** Wallet balances are calculated dynamically based on transactions  

---
