<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $clients = Client::all(); // Fetch all clients from the database
        $products = Product::all();

        return view('orders.create', compact('clients', 'products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'client_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required|numeric',
            // Add other validation rules for the order fields
        ]);

        Order::create($data);

        return redirect()->route('orders.index')
            ->with('success', 'Order created successfully.');
    }

    public function edit(Order $order)
    {
        $clients = Client::all();
        $products = Product::all();

        return view('orders.edit', compact('order', 'clients', 'products'));
    }

    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'client_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required|numeric',
        ]);

        $order->update($data);

        return redirect()->route('orders.index')
            ->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully.');
    }
}
