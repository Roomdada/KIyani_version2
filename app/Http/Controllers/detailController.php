<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class detailController extends Controller
{
    //

    public function index($id){

        $info=Product::findOrFail($id);

          return View('pages/shops/shop_detail')->withInfo($info);
    }

    public function shop($id){


        


    }
}
