<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\{
    Hash,
    Auth,
    Mail,
    Response
};
use Carbon\Carbon;


class MarketController extends Controller
{
    public function addToCart(Request $request)
    {
        if (!is_null($data = DB::table('cart')->where(['user_id'=>Auth::id(),'product_id'=>$request->id])->where('order_id',NULL)->first())) {
            DB::table('cart')->where('id',$data->id)->update([
                'qty'=>$data->qty + $request->qty
            ]);
        }else {
            DB::table('cart')->insert([
                'user_id'=>Auth::id(),
                'product_id'=>$request->id,
                'qty'=>$request->qty,
                'order_id'=>NULL
            ]);
        }

        return response()->json(['message'=>'Berhasil menambahkan ke keranjang anda !','status'=>'success'], 200);
    }

    public function removeFromCart(Request $request)
    {
        if (!is_null($data = DB::table('cart')->where(['user_id'=>Auth::id(),'product_id'=>$request->id])->where('order_id',NULL)->first())) {
            if ($data->qty > 1) {
                DB::table('cart')->where('id',$data->id)->update([
                    'qty'=>$data->qty + 1
                ]);
            }else {
                DB::table('cart')->where('id',$data->id)->delete();
            }
        }

        return response()->json(['message'=>'Berhasil menghapus dari keranjang anda !','status'=>'success']);
    }



    public function checkout(Request $request)
    {
        $trx = 'MRKTPLC-LKS-'.$array_bln[date('n')].'-'.date('Y').'-'.Carbon::now()->timestamp;

        $total = 0;
        foreach (DB::table('cart')->where(['user_id'=>Auth::id(),'order_id'=>NULL])->get() as $key => $value) {
            $total += DB::table('product')->where('id',$value->product_id)->first()->price * $value->qty;
        }

        $transaction = DB::table('order')->insertGetId([
            'transaction_id'=>$trx,
            'user_id'=>Auth::id(),
            'transaction_date'=>Carbon::now()->toDateString('Y-m-d'),
            'status'=>1,
            'total'=>$total,
            'metadata_transaction'=>'SUCCESS'
        ]);

        foreach (DB::table('cart')->where(['user_id'=>Auth::id(),'order_id'=>NULL])->get() as $key => $value) {
                DB::table('cart')->where('id',$value->id)->update([
                    'order_id'=>$transaction
                ]);
        }

        return redirect()->route('history-transaction')->with(['message'=>'Checkout berhasil','status'=>'success']);

    }

    public function myCart(Request $request)
    {
        $data = DB::table('cart')->where(['user_id'=>Auth::id(),'order_id'=>NULL])->get();
        return view('user.cart',['data'=>$data]);
    }

    public function historyTransaction(Request $request)
    {
        $data = DB::table('transaction')->where(['user_id'=>Auth::id()])->get();
        return view('user.history-transaction');
    }

    public function detailProduct(Request $request,$id)
    {
        $data = DB::table('product')->where('id',$id)->first();
        return view('user.detail-product',['data'=>$data]);
    }
}
