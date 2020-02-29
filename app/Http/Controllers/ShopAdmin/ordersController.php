<?php

namespace App\Http\Controllers\ShopAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;


class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    protected $object;
    protected $viewName;
    protected $routeName;
    protected $message;
    protected $shopId;

    public function __construct(Order $object)
    {
     // $this->middleware('auth'); 
     $this->object = $object;
     $this->viewName = 'Admin.shopmanager.orders.';
     $this->routeName = 'orders.';
      $this->message = 'The Data has been saved';
     $this->shopId=1;
    }
    
    public function index()
    {
        $orders = $this->object::with('clients','OrderDetails')
                           ->where('shop_id', '=', $this->shopId)
                           ->orderby('order_date', 'Desc')->get();

       
        return view($this->viewName.'index', compact('orders'));
   
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
        //
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
