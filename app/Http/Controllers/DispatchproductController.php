<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Dispatchproduct;
use DB;
use Session;

class DispatchproductController extends Controller
{
    

    public function add_dispatch_product(Request $request){
        $data['product'] = DB::table('products')->distinct()->get();
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        return view('dispatch.add-dispatch-product', $data);
    }


    public function view(Request $request)
    {
        $data['orders'] = Dispatchproduct::with('products')->ORDERBY('id', 'DESC')->get();
        $data['role'] = $request->session()->get('role');
        return view('dispatch.view-dispatch-product', $data);
    }

    public function store_product(Request $request)
    {
        $city = $request->session()->get('city');
        $dispatchproduct = Dispatchproduct::create($request->all());
        
        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != ''){
                $quantity = DB::table('products')->where('id', '=', $products[$product])->where('city', $city)->select('available_quantity')->first();
                $available_quantity = floatval($quantity->available_quantity);
                $dispatch_quantity = floatval($quantities[$product]);
                if($available_quantity >=  $dispatch_quantity){
                $total_quantity = $available_quantity - $dispatch_quantity;
                $dispatchproduct->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
                DB::table('products')->where('id', '=', $products[$product])->update(['available_quantity' => $total_quantity]);
            }
        }
    }
    return redirect()->back()->with('status', 'Product Dispatch Successfully !!!');

}
}