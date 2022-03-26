<?php

namespace App\Http\Controllers;

use App\Models\ShopifyChannel;
use Illuminate\Http\Request;
use Signifly\Shopify\Shopify;

class ShopifyChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =ShopifyChannel::orderBy('id','desc')->get();
        return view('backend.shopify.channel.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shopify.channel.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new ShopifyChannel();
        $new->channel_name = $request['ch_name'];
        $new->api_access_token = $request['api_ac'];
        $new->api_key = $request['api_key'];
        $new->api_secret_key = $request['api_secret'];
        $new->store_url = $request['store_url'];
        $new->save();
        return redirect()->route('backend.shopify.channels')->with('success','Your Channel Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShopifyChannel  $shopifyChannel
     * @return \Illuminate\Http\Response
     */
    public function getOrders(Request $request)
    {

        $this->store_name ='alfcorporation.myshopify.com';
        $this->api_key = '295d78edc1bdb21c47ac0a0dd428e500';
        $this->api_pass = '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';
        $this->api_url = 'https://' . $this->api_key . ':' . $this->api_pass . '@' . $this->store_name;

        $orders_url = $this->api_url . '/admin/orders.json?limit=250&status=any';
        error_log($orders_url); // Show each call in the log for reference
        $ch = curl_init($orders_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
     return   $orders = json_decode($response);

          $shopify = new Shopify(
           '295d78edc1bdb21c47ac0a0dd428e500',
            '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',
            'https://citihubb.myshopify.in/',
          '2022-01'
        );


      return  $response = $shopify->get(
            "orders",
            [
                "status" => "any"
            ]
        );


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShopifyChannel  $shopifyChannel
     * @return \Illuminate\Http\Response
     */
    public function edit( $shopifyChannel)
    {
        $data = ShopifyChannel::find($shopifyChannel);

          return view('backend.shopify.channel.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShopifyChannel  $shopifyChannel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $new =  ShopifyChannel::find($request['id']);
        $new->channel_name = $request['ch_name'];
        $new->api_access_token = $request['api_ac'];
        $new->api_key = $request['api_key'];
        $new->api_secret_key = $request['api_secret'];
        $new->store_url = $request['store_url'];
        $new->save();
        return redirect()->route('backend.shopify.channels')->with('success','Your Channel Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShopifyChannel  $shopifyChannel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShopifyChannel::destroy($id);
        return redirect()->route('backend.shopify.channels')->with('success','Your Channel Deleted Successfully');

    }
}
