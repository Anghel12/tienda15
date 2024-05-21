<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.PaymentMethods.index')->only('index');
     /*    $this->middleware('can:admin.posts.create')->only('create', 'store');
        $this->middleware('can:admin.posts.edit')->only('edit', 'update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');  */
    }

    public function index()
    {
        $PaymentMethods = PaymentMethod::all();
        return view('admin.PaymentMethods.index', compact('PaymentMethods') );
    }
}

