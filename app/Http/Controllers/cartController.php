<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
         $duplicata = Cart::search(function($cartItem,$rowId) use($request){
            return $cartItem->id ==$request->id_product;
        });

        

         if ($duplicata->isNotEmpty()){
            # code...
           flashy('Le produit est deja ajouté dans votre panier!');
           return redirect()->route('path_home'); 
        }
       
        else{
        $all = Product::find($request->id_product);
        Cart::add($all->id,$all->name,1,$all->price)
           ->associate('App\Models\Product');
           flashy('Votre produit a été ajouté au panier!!');
           return redirect()->route('path_home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (Cart::count()<=0) {
            return redirect()->route('path_home');
        }
        return view('pages/shops/shop_cart');
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
    public function update()
    {
        Cart::destroy();
        return view('pages/shops/shop_cart');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        
        Cart::remove($rowId);
        flashy('Le produit a été supprimé!!');
        return redirect()->route('path_cart');
    }



    public function cartUpdate(Request $request, $rowId)
    {
        $data = $request->json()->all();

        Cart::update($rowId,data['qty']);
        Session::flash('succes','La quantité du produit est desormais ' .$data['qty']);
        return response()->json(['success'=>"Cart quantity has been updated"]);
    }
}
