<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CartDetail;
use App\Models\Cart;
class CartController extends Controller
{
    
    protected $message;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth'); 
       
        $this->message = 'The Product saved to your cart';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //on click on my cart in header get this methode
        // get list of cart details 
        return view('Customer.cart.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id); 
       
        //saving this card
    //    return back()->with('flash_success', $this->message);
   

    $cart=Cart::where('client_id',2)->first();
    $productCart=CartDetail::where('product_id',$id)
    ->where('cart_id',$cart->id)
    ->count();

     if($productCart==0){
        $data=[
            'product_id'=>$id,
            'cart_id'=>$cart->id,
            'product_qty'=>1,
            'notes'=>' ',
     
        ];
      
        $result=CartDetail::create($data);
        $countNum = CartDetail::where('cart_id',$cart->id)->count();
     
        return view('Customer.webLayout.header', compact('countNum'))->render();
      
     }else{
        return view('Customer.webLayout.header', compact('countNum'))->render();  
     }
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
