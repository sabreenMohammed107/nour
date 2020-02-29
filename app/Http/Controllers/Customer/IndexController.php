<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\Product;
use App\Models\Reviews;
class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get sider shop image
        $shops =Shop::all();
        //get product new 
        $newrProducts=Product::where('new_flag', '=',1)->inRandomOrder(rand(10,100))->get();
        $offersProducts=Product::where('discount_perc', '>',0)->orderBy('discount_perc','desc')->inRandomOrder(rand(10,100))->get();
        $commingProducts=Product::where('upcoming_flag', '>',0)->inRandomOrder(rand(10,100))->get();
        $reviews =Reviews::whereIn('review_type',[0,1])
        ->where('stars_rank','=',5)->inRandomOrder(rand(10,100))->get();
        return view('Customer.home.index', compact('shops','newrProducts','offersProducts','commingProducts','reviews'));
    }
}
