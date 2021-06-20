<?php

namespace App\Http\Controllers;
use App\Models\Order as orders;
use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Carbon;
use App\Models\Transaksi;
use App\Models\DetailOrder;
class OrderController extends Controller
{
    public function simpan(Request $request)
    {
        $produk = Barang::where('id', $request->id_barang)->first();
        $data = [
            'id_barang' => $produk->id,
            'harga' => $produk->harga,
            'email' => $request->email??'email',
            'nama' => $request->nama??'nama',
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->telpon,
            'buktipembayaran' => $request->buktipembayaran??'kosong',
            'status' => 1,
            'quantity' => $request->quantity,
            'total_order' => $request->quantity*$produk->harga
        ];
    $p = orders::create($data);

    // $order=new Order;
    // $order->fill($request->all());
    // $order->status=0;
    // $order->save();
    // $detail=new DetailOrder;
    // $detail->order_id= $order->id;
    // $detail->barang_id=$barang->id;
    // $detail->save();
    
        return redirect('detailtransaksi');
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
