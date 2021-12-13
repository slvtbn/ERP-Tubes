<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Production;

class ProductionController extends Controller
{
    public function tampil() {
        $order = Order::get();
        return view('pages.production.tampil_production', compact('order'));
    }

    public function proses(Request $request) {
       $order = Order::find($request->id_order);
       if($order->id_order == $request->id_order) {
          
       }
    }
}
