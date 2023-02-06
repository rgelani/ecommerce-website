<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    public function index(Request $request)
    {
        $order_summary = Order::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("YEAR(created_at) as year")
        )
        ->groupBy('year')
        ->get()->toArray();
        // dd($order_summary);

        $orders =  DB::table('orders')
            ->join('addresses', 'addresses.id', '=', 'orders.address_id')
            ->select('addresses.state_id', DB::raw('COUNT(*) AS total'))
            ->groupBy('addresses.state_id')
            ->get()->toArray();
        foreach ($orders as $order) {
            if ($order->total > 1000 && $order->total < 2000)
                $order->class = 'map-1k-2k';
            elseif ($order->total > 2000 && $order->total < 5000)
                $order->class = 'map-2k-5k';
            elseif ($order->total > 5000 && $order->total < 10000)
                $order->class = 'map-5k-10k';
            elseif ($order->total > 10000 && $order->total < 15000)
                $order->class = 'map-10k-15k';
            elseif ($order->total > 15000 && $order->total < 25000)
                $order->class = 'map-15k-25k';
            elseif ($order->total > 25000 && $order->total < 35000)
                $order->class = 'map-25k-35k';
            elseif ($order->total > 35000 && $order->total < 50000)
                $order->class = 'map-35k-50k';
            elseif ($order->total > 50000)
                $order->class = 'map-50k';
            else
                $order->class = '';
        }
        return view('admin.order.index', compact('orders'));
    }
}
