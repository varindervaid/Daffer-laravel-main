<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoCurrenciesController extends Controller
{
    public function crypto_dashboard()
    {
        return view('pages.crypto-dashboard');
    }
    public function crypto_market()
    {
        return view('pages.crypto-market');
    }
    public function crypto_currency_exchange()
    {
        return view('pages.crypto-currency-exchange');
    }
    public function crypto_buysell()
    {
        return view('pages.crypto-buysell');
    }
    public function crypto_wallet()
    {
        return view('pages.crypto-wallet');
    }
    public function crypto_transactions()
    {
        return view('pages.crypto-transactions');
    }
}
