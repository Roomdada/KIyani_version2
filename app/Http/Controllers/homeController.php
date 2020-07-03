<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\CartItem;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Testimony;
use App\Models\Service;
use App\Models\Product;
use App\Models\Portefolio;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Department;


class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $partners = Partners::all();
        $testimony = Testimony::all();
        $portefolio = Portefolio::all();
        $service = Service::all();
        $products = DB::table('products')
                ->join('categories','products.categories_id', '=', 'categories.id')
                ->join('departments', 'products.departments_id', '=', 'departments.id')
                ->select(
                    'products.*',
                    'categories.slug as categories_slug',
                    'departments.slug as departments_slug'
                )->get()->shuffle();
        return view('index',compact('testimony','service','products','partners','portefolio'));

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
