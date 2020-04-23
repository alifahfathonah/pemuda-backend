<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    
    public function get(Request $requet,$id)
    {
    	$product = Transaction::with('details.product')->find($id);

    	if($product)
    		return ResponseFormatter::success($product,'Data Transaksi berhasil diambil');
    	else
    		return ResponseFormatter::error(null,'Data transaksi tidak ada',404);
    }
}
