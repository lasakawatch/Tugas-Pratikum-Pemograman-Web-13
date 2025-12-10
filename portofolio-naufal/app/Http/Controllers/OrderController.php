<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        if (!session('logged_in')) {
            redirect('/login')->with('error', 'Silakan login terlebih dahulu.')->send();
            exit;
        }
    }

    public function index()
    {
        $orders = Order::with('product')->where('user_id', session('user_id'))->latest()->get();
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        Order::create([
            'user_id' => session('user_id'),
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $product->price * $request->quantity,
            'status' => 'pending'
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil ditambahkan!');
    }

    public function destroy(Order $order)
    {
        if ($order->user_id != session('user_id')) {
            return redirect()->back()->with('error', 'Tidak memiliki akses!');
        }

        $order->delete();
        return redirect()->back()->with('success', 'Pesanan dibatalkan!');
    }
}
