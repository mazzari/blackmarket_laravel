<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Carbon;
use App\Models\Transaksi;
class OrderController extends Controller
{
    public function simpan(Barang $barang,Request $request){
    $order=new Order;
    $order->id_barang=$barang->id;
    $order->total_harga=$barang->harga;
    $order->status=0;
    $order->save();
    
        return redirect('home');
    }
        public function index()
            {
                $orders=Order::all();
        
                return view('admin.order.get',compact('orders'));
            } 
            public function confrim(Order $order)
            {
            
                $order->status=2;
                $order->save();
                $transaksi=new Transaksi;
                $transaksi->order_id=$order->id;
                $transaksi->tanggal_byr=Carbon::now();
                $transaksi->status=1;
                $transaksi->jumlah_transaksi=$order->total_harga; 
                $transaksi->save();
                return redirect('admin/order');
            }
            
            //
}
