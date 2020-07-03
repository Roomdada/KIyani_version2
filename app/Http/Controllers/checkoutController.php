<?php

namespace App\Http\Controllers;
use illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Stripe\Stripe;
use App\Models\Checkout;
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

    


         $content = Cart::content();
         dd(Arr::get($content,'name'));
        Stripe::setApiKey('sk_test_51GzgaKHlVKZD1l4NUFt95yPYSszbih6RSRRV5OpG8bDLKsCs0rsWdVvTbCvKllQUgAC7Y4v8Q6yqxkPUrFVqs1pl00ZyqjCjXW');

        $intent = PaymentIntent::create([
              'amount' => round(Cart::subtotal())*1000,
              'currency' => 'eur',
            ]);


       // dd($intent);
        
        $clientsecret = Arr::get($intent,'client_secret');

       // dd($clientsecret);
        return view('pages.checkout.checkout',['clientsecret'=>$clientsecret]);
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
        //4
       // dd($request['name']);
  /* $req = $this->validate($request,
        [
             'name'=>'required|min:3', 
             'email'=>'required|email', 
              'contact'=>'required|max:8|min:8',
              'commune'=>'required',
              'price'=>'require',
              'products'=>'required',
        ]);
    
       if ($req->fails()) {
           return back()->withErrors();
       }*/
    
       $products = [];
       $i = 0;
       foreach (Cart::content() as $product) {
           $products['product_'.$i][]=$product->model->name;
           $products['product_'.$i][]=$product->model->price;
           $products['product_'.$i][]=$product->qty;
           $i++;
       }

       $product=serialize($products);

       $price = round(Cart::subtotal())*1000;


       Checkout::create(
        [
        'name'   =>  $request['name'],
        'email'   => $request['email'],
        'contact' => $request['contact'],
        'commune' => $request['commune'],
        'price'   => $price,
        'products' => $product,
         ]
         );

       Cart::destroy();
        session()->flash('message','Votre commande a été prise en compte nous vous contacterons le plus vite possible');
       return view('pages.shops.shop_cart');
       
     
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
