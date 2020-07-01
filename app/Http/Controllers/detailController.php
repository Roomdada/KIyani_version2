<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

class detailController extends Controller
{
    //

    public function index($id){

       

        $info=\App\models\Product::findOrFail($id);

          return View('pages/shops/shop_detail')->withInfo($info);
    }

    public function shop(Request $request ,$id){


     

        $duplicata = Cart::search(function($cartItem,$rowId) use($request){
            return $cartItem->id ==$request->id_product;
        });

        

         if ($duplicata->isNotEmpty()){
            # code...
           flashy('Le produit est deja ajouté dans votre panier!');
           return redirect()->route('path_home'); 
        }
       
        else{
        $all = Product::findOrfail($id);
        Cart::add($id,$all->name,$request->quantity,$all->price)
           ->associate('App\Models\Product');
           flashy('Votre produit a été ajouté au panier!!');
           return redirect()->route('path_home');
        }



    }
}
