<?php

namespace App\Http\Controllers;
use illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Gloudemans\Shoppingcart\Facades\Cart;
class checkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    
        Stripe::setApiKey('sk_test_51GzgaKHlVKZD1l4NUFt95yPYSszbih6RSRRV5OpG8bDLKsCs0rsWdVvTbCvKllQUgAC7Y4v8Q6yqxkPUrFVqs1pl00ZyqjCjXW');

        $intent = PaymentIntent::create([
              'amount' => round(Cart::subtotal(),0),
              'currency' => 'eur',
            ]);

        dd($intent);
        return view('pages.checkout.checkout');
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

        foreach (Cart::content() as $key => $value) {
           $name = Arr::get($value,'name');
        }
        dd($name);
        $number = Arr::get(Cart::content(),'name');
        dd(Cart::subtotal());
     
     
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
