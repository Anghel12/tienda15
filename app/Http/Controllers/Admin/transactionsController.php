<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class transactionsController extends Controller
{
    public function index()
    {
        $Transactions = Transaction::all();
        return view('admin.transactions.index', compact('Transactions') );
    }
}
