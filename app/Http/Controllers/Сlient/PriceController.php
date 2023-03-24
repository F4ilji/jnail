<?php
namespace App\Http\Controllers\Сlient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    public function index()
    {
        return view('client.price');
    }
}
