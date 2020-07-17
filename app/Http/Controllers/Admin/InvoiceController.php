<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Cart;
use App\Model\Invoice_list;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $this->validate($request, [
            'customar_id' => 'required'
        ]);

        $invoice =[];
        $invoice['customar_id'] =$request->customar_id;
        $invoice['user_id'] = Auth::User()->id;
        $invoice['total'] =$request->total;
        $invoice['due'] =$request->due;
        $invoice['pay'] =$request->pay;
        $invoice['created_at'] =Carbon::now()->toDateString();
        if($request->due){
            \App\Model\Customar::find($request->customar_id)->increment('due', $request->due);
        }

        //insert data into invoice table

        $invoiceId = \App\Model\Invoice::insertGetId($invoice);
        foreach (Cart::where('ip', request()->ip())->get() as $cart) {
            Invoice_list::insert([
                'user_id' => Auth::user()->id,
                'invoice_id' => $invoiceId,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'created_at' => Carbon::now(),
            ]);
            // Delete Form Cart
            \App\Model\Product::find($cart->product_id)->decrement('quantity', $cart->quantity);
            Cart::find($cart->id)->delete();
        }
        $notification = array(
            'message' => "Thank you ! Order Done",
            'alert-type' => 'info'
        );
            return redirect()->route('product_list')->with($notification);
        }

        public function report(){
            $invoices = \App\Model\Invoice::with('customar')->orderBy('id','DESC')->get();
            return view('admin.report',compact('invoices'));
        }


    public function pos(){
        $unknown_customar = \App\Model\Customar::select('id','customar_name','phone')->first();
        $customars = \App\Model\Customar::select('id','customar_name','phone')->orderBy('customar_name','ASC')->get();
        $carts = Cart::with('product')->latest()->get();
//        $categories = \App\Model\Category::select('category_name','id')->get();
        $products = \App\Model\Product::latest()->get();
        return view('admin.pos',compact('carts','products','customars','unknown_customar'));
    }
}
