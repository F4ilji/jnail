<?php

namespace App\Http\Controllers\admin;

use App\Models\Addon;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    function index() {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }
    function create() {
        $services = Service::all();
        $addons = Addon::all();
        return view('admin.orders.create', compact('services', 'addons'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'service_id' => 'required|integer',
            'name' => 'required|string',
            'phone' => 'required|string',
            'addon_ids' => 'array',
            'date' => 'required|string',
            'time' => 'required|string',
        ]);
        $servicePrice = Service::find($data['service_id'])->price;

        $addonsPrice = 0;
        $addons = null;
        if(array_key_exists('addon_ids', $data)) {
            $addons = $data['addon_ids'];
            foreach ($addons as $addonId) {
                $addonsPrice += Addon::find($addonId)->price;
            }
        }
        $data['appointment_datetime'] = \Carbon\Carbon::parse($data['date'].' '.$data['time']);

        unset($data['addon_ids'], $data['date'], $data['time']);
        

        $totalPrice = $servicePrice + $addonsPrice;
        
        $data['price'] = $totalPrice;

        
        $order = Order::create($data);
        $order->addons()->attach($addons);
        
        return redirect()->route('admin.order.index');
    }
    
    function delete(Order $order) {
        $order->delete();
        return redirect()->back();
    }
    function edit(Order $order) {
    $order = Order::find($order->id);
    $services = Service::all();
    $addons = Addon::all();
    return view('admin.orders.edit', compact('order','services', 'addons'));

    }
    function update() {

    }
    function show(Order $order) {
        $order = Order::find($order->id);
        return view('admin.orders.show', compact('order'));
    }
    public function confirmOrder(Request $request, Order $order) {
    $order->state = 1;
    $order->update();

    return redirect()->back()->with('success', 'Заявка успешно подтверждена!');
}



}
