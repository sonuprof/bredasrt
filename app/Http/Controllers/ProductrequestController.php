<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Productrequest;
use App\Models\Product_productrequest;
use DB;
use Session;

class ProductrequestController extends Controller
{
    public function index(Request $request){
        $data['product'] = DB::table('products')->distinct()->get();
        $data['role'] = $request->session()->get('role');
        return view('request.add-request', $data);  
       }
    
       public function view(Request $request)
    {
        $data['request'] = Productrequest::with('products')->ORDERBY('id', 'DESC')->get();
        $data['role'] = $request->session()->get('role');
        return view('request.view-request', $data);
    }
    
    
    public function store(Request $request)
    {
        $productRequest = Productrequest::create($request->all());
        $products = $request->input('products', []);
        $quantities = $request->input('quantitiess', []);
        $units = $request->input('units', []);
        for ($product = 0; $product < count($products); $product++) {
            if ($products[$product] != '') 
                $productRequest->products()->attach($products[$product], [
                    'quantity' => $quantities[$product],
                    'unit' => $units[$product]
                ]);
            }
    
        return redirect()->back()->with('status', 'Request sent successfully!');
    }

}

