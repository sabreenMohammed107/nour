<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\ImagesSlider;
use App\Models\Reviews;
use App\Models\ShopContact;
use App\Models\Product;
use App\Models\Client;
use App\Models\OrderDetails;
use App\Models\Brand;
use App\Models\Gender;
use App\Models\FavoritesProducts;
use App\Models\CartDetail;
use App\Models\Cart;
use Log;
use DB;
class ShopController extends Controller
{
    protected $object;

    protected $mainData = [];
    protected $viewName;
    protected $prdId;
    protected $shopId;
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Shop $object)
    {
        // $this->middleware('auth'); 
        $this->object = $object;
        $this->viewName = 'Customer.shop.shop';
        $this->shopId=2;
  
    }
    public function index()
    {
        return view('home');
    }
    
    public function shop()
    {
        return view('shop');
    }

    public function showShop(){
        $shopSlider = $this->object::where('id', '=', $shopId)->firstOrFail();
        return view($this->viewName, compact('shopSlider')); 
    }
    /**
     *  sliderView this is main function on shop blade
     */
    

    public function sliderView($id)
	{
        $productShop=$id;
        $reviews =Reviews::with('shop')->where('shop_id', '=',$id)->orderBy('id','desc')->paginate(3);
        // $reviews =Reviews::orderBy('id','desc')->paginate(5);
        $data=ImagesSlider::with('shop')->where('shop_id', '=',$id)->orderBy('order','asc')->get();

        $shopSlider = $this->object::where('id', '=',$id)->firstOrFail();
        $contacts =ShopContact::orderBy('id','desc')->get();

         $producttts=Product::where('shop_id', '=',$id)->where('active', '=', 1) ->
         whereHas('category')->paginate(6);
  
        $shop =Shop::find($id);
                 
        $client =Client::find(1);
    
        $ProdOrder=OrderDetails::with('product')->get();
     
        $brands=Brand::distinct()->with('product')
        ->join('products', 'products.brand_id', '=', 'brands.id')
        ->where('products.shop_id', '=', $id)
        ->groupBy('brands.id')
        ->get();
      
        $genders=Gender::all();
     
        $items=DB::table('favorites_products')
        ->select('product_id')
        ->where('client_id','=',2)
        ->pluck('product_id');
 //get no of items on cart
$cart=Cart::where('client_id',2)->first();
 $countNum = CartDetail::where('cart_id',$cart->id)->count();
//  return($countNum);
	 return view('Customer.shop.shop', compact('data','shopSlider','reviews','contacts','producttts','shop','client','ProdOrder','productShop','brands','genders','items','countNum'));
    }
    
    /**
     * Adding Contact Message 
     */
    

    public function addContact(Request $request){
       
            $this->validate($request,[
                'fname' => 'required',
               'lname' => 'required',
               'email' => 'required',
               'country' => 'required',
               'msg' => 'required',
               
            ]);
    
          $data=[
                'first_name'=>$request->input('fname'),
                'last_name'=>$request->input('lname'),
                'email' =>$request->input('email'),
                'phone' =>$request->input('phone'),
                'message'=>$request->input('msg'),
                'country_id'=>1,
                'client_id'=>1,
                'shop_id'=>$request->input('shop_id'),
                'message_date'=>now(),
                
            ];
          
            $result=ShopContact::create($data);
       
         
            return back();
        

        }

        /**
         * Adding review on shop 
         */
        
        public function addReview(Request $request){
           
               $this->validate($request,[
                    'name' => 'required',
                   'review' => 'required',
                   
                ]);
              $id=$request->input('shop_id');
              $data=[
                    'name'=>$request->input('name'),
                    'review_text'=>$request->input('review'),
                    'email' =>$request->input('email'),
                    'stars_rank'=>$request->input('rating'),
                    'client_id'=>1,
                    'shop_id'=>$request->input('shop_id'),
                    'review_date'=>now(),
                    'review_type'=>1,
                    'active'=>1, 
                ];
            
                $result=Reviews::create($data);
                
                $reviews =Reviews::with('shop')->where('shop_id', '=',$id)->orderBy('id','desc')->paginate(3);
                $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
                if($result){ 
                $arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
                }
                  return Response()->json($reviews);

            }
            /**
             * Make pagination on shop and return with ajax
             */
              
            
                function fetch_data(Request $request)
                {
                 
                 if($request->ajax())
                 {
                    $reviews =Reviews::orderBy('id','desc')->paginate(5);
                
                  return view('Customer.table_data', compact('reviews'))->render();
                 }
                }

                function getCatList(Request $request)
                {
                  
                
                    if($request->ajax())
                 {
                        return view('Customer.cat_product', compact('products'))->render();
                 }
                }

                 
/*
**
* Get Pagination of shop with category
**
*/
     
                 function fetch_productWhere(Request $request)
                 {
                    
                    if($request->ajax())
                    {
                     $filtters=DB::table('products')
                     ->where('shop_id', '=',  $this->shopId)
                     ->where('active', '=',  1);
                     
                     if(!empty($request->get("ids"))){
                         $filtters->whereIn('category_id',$request->get("ids"));
                     }
                     if(!empty($request->get("start"))){
                         $filtters->where('price','>=',$request->get("start"));
                     }
                     if(!empty($request->get("end"))){
                         $filtters->where('price','<=',$request->get("end"));
                     }
                     if(!empty($request->get("brands"))){
                         $filtters->whereIn('brand_id',$request->get("brands"));
                     } 
                     if(!empty($request->get("genders"))){
                         $filtters->whereIn('gender_id',$request->get("genders"));
                     }   
                     if(!empty($request->get("offers"))){
                         $filtters->whereIn('discount_perc',$request->get("offers"));
                     }      
                     $producttts   = $filtters->orderBy('created_date','desc');     
  
                 
                 if(!empty($request->get("selection")) && $request->get("selection")==0){
                     $filtters->orderBy('created_date','desc');
                 }
                 if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                     $filtters->orderBy('price','desc');
                 }
                 if(!empty($request->get("selection")) && $request->get("selection")==2){
                     $filtters->orderBy('total_stars_rate','desc');
                 }
                
 
                 $producttts   = $filtters->paginate(6);   
                
             
               return view('Customer.shop.catProduct', compact('producttts'))->render();
            

                    }
                }
/*
**
* Get Pagination of shop with Breand
**
*/
     
function fetch_productBrands(Request $request)
{
    if($request->ajax())
                   {
                    $filtters=DB::table('products')
                    ->where('shop_id', '=',  $this->shopId)
                    ->where('active', '=',  1);
                    
                    if(!empty($request->get("ids"))){
                        $filtters->whereIn('category_id',$request->get("ids"));
                    }
                    if(!empty($request->get("start"))){
                        $filtters->where('price','>=',$request->get("start"));
                    }
                    if(!empty($request->get("end"))){
                        $filtters->where('price','<=',$request->get("end"));
                    }
                    if(!empty($request->get("brands"))){
                        $filtters->whereIn('brand_id',$request->get("brands"));
                    } 
                    if(!empty($request->get("genders"))){
                        $filtters->whereIn('gender_id',$request->get("genders"));
                    }   
                    if(!empty($request->get("offers"))){
                        $filtters->whereIn('discount_perc',$request->get("offers"));
                    }      
                    $producttts   = $filtters->orderBy('created_date','desc');     
 
                
                if(!empty($request->get("selection")) && $request->get("selection")==0){
                    $filtters->orderBy('created_date','desc');
                }
                if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                    $filtters->orderBy('price','desc');
                }
                if(!empty($request->get("selection")) && $request->get("selection")==2){
                    $filtters->orderBy('total_stars_rate','desc');
                }
               

                $producttts   = $filtters->paginate(6);   
               
                
              return view('Customer.shop.catProduct', compact('producttts'))->render();
                                  

   }
}

/*
**
* Get Pagination of shop with Gender
**
*/
     
function fetch_productGenders(Request $request)
{
    if($request->ajax())
    {
     $filtters=DB::table('products')
     ->where('shop_id', '=',  $this->shopId)
     ->where('active', '=',  1);
     
     if(!empty($request->get("ids"))){
         $filtters->whereIn('category_id',$request->get("ids"));
     }
     if(!empty($request->get("start"))){
         $filtters->where('price','>=',$request->get("start"));
     }
     if(!empty($request->get("end"))){
         $filtters->where('price','<=',$request->get("end"));
     }
     if(!empty($request->get("brands"))){
         $filtters->whereIn('brand_id',$request->get("brands"));
     } 
     if(!empty($request->get("genders"))){
         $filtters->whereIn('gender_id',$request->get("genders"));
     }   
     if(!empty($request->get("offers"))){
         $filtters->whereIn('discount_perc',$request->get("offers"));
     }      
     $producttts   = $filtters->orderBy('created_date','desc');     

 
 if(!empty($request->get("selection")) && $request->get("selection")==0){
     $filtters->orderBy('created_date','desc');
 }
 if(!empty($request->get("selection")) && $request->get("selection")==1 ){
     $filtters->orderBy('price','desc');
 }
 if(!empty($request->get("selection")) && $request->get("selection")==2){
     $filtters->orderBy('total_stars_rate','desc');
 }


 $producttts   = $filtters->paginate(6);   

 
return view('Customer.shop.catProduct', compact('producttts'))->render();
                                  

   }
}
/*
**
* Get Pagination of shop with Offer
**
*/
function fetch_productOffers(Request $request)
{
    if($request->ajax())
                   {
                    $filtters=DB::table('products')
                    ->where('shop_id', '=',  $this->shopId)
                    ->where('active', '=',  1);
                    
                    if(!empty($request->get("ids"))){
                        $filtters->whereIn('category_id',$request->get("ids"));
                    }
                    if(!empty($request->get("start"))){
                        $filtters->where('price','>=',$request->get("start"));
                    }
                    if(!empty($request->get("end"))){
                        $filtters->where('price','<=',$request->get("end"));
                    }
                    if(!empty($request->get("brands"))){
                        $filtters->whereIn('brand_id',$request->get("brands"));
                    } 
                    if(!empty($request->get("genders"))){
                        $filtters->whereIn('gender_id',$request->get("genders"));
                    }   
                    if(!empty($request->get("offers"))){
                        $filtters->whereIn('discount_perc',$request->get("offers"));
                    }      
                    $producttts   = $filtters->orderBy('created_date','desc');     
 
                
                if(!empty($request->get("selection")) && $request->get("selection")==0){
                    $filtters->orderBy('created_date','desc');
                }
                if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                    $filtters->orderBy('price','desc');
                }
                if(!empty($request->get("selection")) && $request->get("selection")==2){
                    $filtters->orderBy('total_stars_rate','desc');
                }
               

                $producttts   = $filtters->paginate(6);   
               
                
              return view('Customer.shop.catProduct', compact('producttts'))->render();
                                  

   }
}
/*
select to Sort
*/
function selectSort(Request $request)
{
            if($request->ajax())
                   {
                    $filtters=DB::table('products')
                    ->where('shop_id', '=',  $this->shopId)
                    ->where('active', '=',  1);
                    
                    if(!empty($request->get("ids"))){
                        $filtters->whereIn('category_id',$request->get("ids"));
                        if(!empty($request->get("selection")) && $request->get("selection")==0){
                            $filtters->orderBy('created_date','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                            $filtters->orderBy('price','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==2){
                            $filtters->orderBy('total_stars_rate','desc');
                        }
                    }
                    if(!empty($request->get("start"))){
                        $filtters->where('price','>=',$request->get("start"));
                        if(!empty($request->get("selection")) && $request->get("selection")==0){
                            $filtters->orderBy('created_date','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                            $filtters->orderBy('price','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==2){
                            $filtters->orderBy('total_stars_rate','desc');
                        }
                    }
                    if(!empty($request->get("end"))){
                        $filtters->where('price','<=',$request->get("end"));
                        if(!empty($request->get("selection")) && $request->get("selection")==0){
                            $filtters->orderBy('created_date','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                            $filtters->orderBy('price','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==2){
                            $filtters->orderBy('total_stars_rate','desc');
                        }
                    }
                    if(!empty($request->get("brands"))){
                        $filtters->whereIn('brand_id',$request->get("brands"));
                        if(!empty($request->get("selection")) && $request->get("selection")==0){
                            $filtters->orderBy('created_date','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                            $filtters->orderBy('price','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==2){
                            $filtters->orderBy('total_stars_rate','desc');
                        }
                    } 
                    if(!empty($request->get("genders"))){
                        $filtters->whereIn('gender_id',$request->get("genders"));
                        if(!empty($request->get("selection")) && $request->get("selection")==0){
                            $filtters->orderBy('created_date','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                            $filtters->orderBy('price','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==2){
                            $filtters->orderBy('total_stars_rate','desc');
                        }
                    }   
                    if(!empty($request->get("offers"))){
                        $filtters->whereIn('discount_perc',$request->get("offers"));
                        if(!empty($request->get("selection")) && $request->get("selection")==0){
                            $filtters->orderBy('created_date','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                            $filtters->orderBy('price','desc');
                        }
                        if(!empty($request->get("selection")) && $request->get("selection")==2){
                            $filtters->orderBy('total_stars_rate','desc');
                        }
                    }      
                    $producttts   = $filtters->orderBy('created_date','desc');     
 
                
              
               

                $producttts   = $filtters->paginate(6);   
               
                
              return view('Customer.shop.catProduct', compact('producttts'))->render();
                                  

   }
}
/**
 *   fetch_productPrice
 */

                public function fetch_productPrice(Request $request)
                { 
                   
                    if($request->ajax())
                    {
                     $filtters=DB::table('products')
                     ->where('shop_id', '=',  $this->shopId)
                     ->where('active', '=',  1);
                     
                     if(!empty($request->get("ids"))){
                         $filtters->whereIn('category_id',$request->get("ids"));
                     }
                     if(!empty($request->get("start"))){
                         $filtters->where('price','>=',$request->get("start"));
                     }
                     if(!empty($request->get("end"))){
                         $filtters->where('price','<=',$request->get("end"));
                     }
                     if(!empty($request->get("brands"))){
                         $filtters->whereIn('brand_id',$request->get("brands"));
                     } 
                     if(!empty($request->get("genders"))){
                         $filtters->whereIn('gender_id',$request->get("genders"));
                     }   
                     if(!empty($request->get("offers"))){
                         $filtters->whereIn('discount_perc',$request->get("offers"));
                     }      
                     $producttts   = $filtters->orderBy('created_date','desc');     
  
                 
                 if(!empty($request->get("selection")) && $request->get("selection")==0){
                     $filtters->orderBy('created_date','desc');
                 }
                 if(!empty($request->get("selection")) && $request->get("selection")==1 ){
                     $filtters->orderBy('price','desc');
                 }
                 if(!empty($request->get("selection")) && $request->get("selection")==2){
                     $filtters->orderBy('total_stars_rate','desc');
                 }
                
 
                 $producttts   = $filtters->paginate(6);   
                
                 
               return view('Customer.shop.catProduct', compact('producttts'))->render();
                                  
                
                                   }
                               }
                 
                     

                 public function category($id){
                   
                   
                    $productShop=$this->shopId;
                    $reviews =Reviews::orderBy('id','desc')->paginate(5);
                    $data=ImagesSlider::orderBy('order','asc')->get();
                    $shopSlider = $this->object::where('id', '=', $this->shopId)->firstOrFail();
                    $contacts =ShopContact::orderBy('id','desc')->get();
                    $products=Product::where('shop_id', '=',$this->shopId)->where('active', '=', 1)->paginate(6);
                    $shop =Shop::find($this->shopId);	
                    $client =Client::find(1);
             
                    $ProdOrder=OrderDetails::with('product')->get(); 
                 
                      return view('Customer.cat_product', compact('data','datashopSlider','reviews','contacts','productsCat','shop','client','ProdOrder','productShop'));
 
                  
                    
                }  


    
            } 

