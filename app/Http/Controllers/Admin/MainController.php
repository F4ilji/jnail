<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function index() {
        $user = Auth::user();
        $orders = Order::where('state', '=', 0)->orderBy('created_at', 'desc')->get();
        return view('admin.main', compact('user', 'orders'));
    }
}
