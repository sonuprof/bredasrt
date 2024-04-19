<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
use App\Models\User;
use DB;
use Session;

class CallController extends Controller
{
    public function index_kusum(Request $request){
         $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        return view('kusum.pages.dashboard', $data);
    }
}
