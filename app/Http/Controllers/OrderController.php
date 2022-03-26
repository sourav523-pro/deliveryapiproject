<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use EcomExpressAPI\API as Post;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $api = new Post('username', 'password');

        $data = Order::all();
        return view('backend.orders.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.orders.create');
    }
    protected function editOrder(string $orderId){
        $orderData= Order::find($orderId);
        $orderProductData= OrderProduct::where('order_id', $orderId)->get();
        return view('backend.orders.edit')->with(['orderData'=> $orderData, 'orderProduct'=> $orderProductData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     ''
        // ])
        // return $request->all();
        $order = new Order();
        $order->channel = 'Custom';

        $order->order_id = $request->order_id;
        $order->order_type = $request->order_type;

        $order->ship_firstname = $request->ship_firstname;
        $order->ship_lastname = $request->ship_lastname;
        $order->ship_company_name = $request->ship_company_name;
        $order->ship_address = $request->ship_address;
        $order->ship_address2 = $request->ship_address2;
        $order->ship_pincode = $request->ship_pincode;
        $order->ship_city = $request->ship_city;
        $order->ship_state = $request->ship_state;
        $order->ship_phone = $request->ship_phone;
        $order->ship_email = $request->ship_email;

        $order->bill_firstname = $request->bill_firstname;
        $order->bill_lastname = $request->bill_lastname;
        $order->bill_company_name = $request->bill_company_name;
        $order->bill_address = $request->bill_address;
        $order->bill_address2 = $request->bill_address2;
        $order->bill_pincode = $request->bill_pincode;
        $order->bill_city = $request->bill_city;
        $order->bill_state = $request->bill_state;
        $order->bill_phone = $request->bill_phone;
        $order->bill_email = $request->bill_email;

        $order->weight = $request->weight;
        $order->cm1 = $request->cm1;
        $order->cm2 = $request->cm2;
        $order->cm3 = $request->cm3;


        $order->shipping_charges = $request->shipping_charges;
        $order->cod_charges = $request->cod_charges;
        $order->tax_amt = $request->tax_amt;
        $order->discount = $request->discount;

        $order->total = $order->shipping_charges + $order->cod_charges +  $order->tax_amt - $order->discount;
        $order->save();

        foreach($request->product_name as $key=>$product_name)
        {
            $order_product = new OrderProduct();
            $order_product->order_id = $order->id;
            $order_product->product_name = $product_name;
            $order_product->qty = $request->qty[$key];
            $order_product->amt = $request->amount[$key];
            $order_product->sku = $request->sku[$key];
            $order_product->save();

        }

        return redirect()->back();
    }
    protected function editOrderPost(){
        $input = $request->all();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
