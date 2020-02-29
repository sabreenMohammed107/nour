<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CartDetail;
use App\Models\Cart;

class CartShowController extends Controller
{
    function index($id){

        $cliendId=2;
     $cart=Cart::where('client_id',$cliendId)->first();
     $countNum = CartDetail::where('cart_id',$cart->id)->count();
     
     //get view cart table
      $cartDetails=CartDetail::where('cart_id',$cart->id)->get();
        //    dd($cartDetails); 
       return view('Customer.cart.index', compact('countNum','cartDetails','cart'));
        

   }



   function updatCart(Request $request){
   

    $qnty=$request->input("testqq");
    $qqq=$request->input('testid');  
  
    $cartDetail=CartDetail::find($qqq);
  
$cartDetail->update([
    'product_qty'=>$qnty,
           ]);

 $price=$cartDetail->products->price;
 $total=$price*$qnty;  

   $cartDetail->product_qty=$qnty;

$countNum = CartDetail::where('cart_id',$cartDetail->cart->id)->count();

//get view cart table
$cartDetails=CartDetail::where('cart_id',$cartDetail->cart->id)->get();
$cart=Cart::where('client_id',2)->first();
$totall=0;
foreach($cartDetails as $detail){
    $totall+=($detail->products->price-(($detail->products->price*$detail->products->discount_perc)/100)) * $detail->product_qty;
}
// dd($totall);
$cart->update([
    'total_cost'=>$totall,
    'net_value'=>($cart->shipping_value +$totall)
           ]);

//    dd($cartDetails); 
return view('Customer.cart.index', compact('countNum','cartDetails','cart'));        
// return view('Customer.cart.cartTable', compact('cartDetails','cart'));

   }


   public function destroy($id)
   {
    $cliendId=2;  
     
     // $id=$request->input('xdelete');  
     $cartDetail=CartDetail::findOrFail($id);


$cartDetail->delete();

$cart=Cart::where('client_id',$cliendId)->first();
$countNum = CartDetail::where('cart_id',$cart->id)->count();

//get view cart table
 $cartDetails=CartDetail::where('cart_id',$cart->id)->get();
        $totall=0;
       foreach($cartDetails as $detail){
           $totall+=($detail->products->price-(($detail->products->price*$detail->products->discount_perc)/100)) * $detail->product_qty;
       }
       // dd($totall);
       $cart->update([
           'total_cost'=>$totall,
           'net_value'=>($cart->shipping_value +$totall)
                  ]);
       
       //    dd($cartDetails); 
       return view('Customer.cart.index', compact('countNum','cartDetails','cart'));
   }

}
