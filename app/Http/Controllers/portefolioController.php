<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Portefolio;
use App\Models\Testimony;
use Illuminate\Http\Request;

class portefolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  /*$randomUser = DB::table('users')
                ->inRandomOrder()
                ->first();*/
    public function index($slug)
    {
       $testimony = Portefolio::all();
       $details = Portefolio::where('slug',$slug)->first();
       return view('pages.portefolio/portefolio_detail',compact('details','testimony'));
    }

    public function view()
    {
        $testimony = Testimony::all();
        $all_porte = Portefolio::inRandomOrder()->take(8)->get();
        return view('pages/portefolio/portefolio',compact('testimony','all_porte'));

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
