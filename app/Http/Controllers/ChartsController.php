<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ChartsController extends Controller
{
    public function index()
    {
        $productData = Product::select('id', 'name', 'price')->get();

        $earningsData = Order::select('product_id', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('product_id')
            ->get();

        $categoryData = Category::select('name')
            ->join('products', 'categories.id', '=', 'products.category_id')
            ->join('orders', 'products.id', '=', 'orders.product_id')
            ->groupBy('categories.name')
            ->select('categories.name', DB::raw('SUM(orders.quantity) as total_ordered'))
            ->get();

        $totalEarnings = $earningsData->sum(function ($earning) use ($productData) {
            $product = $productData->firstWhere('id', $earning->product_id);

            return $product->price * $earning->total_quantity;
        });

        $totalClients = Client::count();

        $salesData = Order::select(DB::raw('DATE(order_date) as date'), DB::raw('SUM(quantity * products.price) as total_sales'))
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->groupBy('date')
        ->get();

        return view('charts.index', compact('productData', 'earningsData', 'categoryData', 'totalEarnings', 'totalClients', 'salesData'));
    }
}
