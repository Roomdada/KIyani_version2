<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mercuryseries\Flashy\FlashyServiceProvider;

class adminController extends Controller
{
    //

    public function index(){


        $article=\App\article::get();
        return View('admin.partials.index')->withArticle($article);
    }


    public function add(){


        return View('admin.partials.add');

    }


    public function searcher(Request $request){


        

        
       
       

        $request->validate([

             "search"=>'required|min:0'
        ]);


        $seacher=$request->search;

        $findable=\App\article::where('id',$seacher)    
        ->orWhere('nom',$seacher)
        ->orWhere('quantity',$seacher)
        ->orWhere('color',$seacher)
        ->orWhere('price',$seacher)->get();



        

    
        return redirect('/admin/search')->withFindable($findable);


    }

    public function getSearch(){

        return View('admin/partials/find');
   
    }


    public function deletehistory($id){

          
       
        if(\App\article::findOrFail($id)->delete()):
            return back();
        endif;
    }



    public function history(){


        $article=\App\article::orderBy('id','desc')->paginate(5);

         return View('admin/partials/historique')->withArticle($article);


    }

    public function addSomething(Request $request){

        $request->validate([
            'categorie'=>'required',
            'name'=>'required',
            'stock'=>'required',
            'price'=>'required',
            'file'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName=$request->file->getClientOriginalName();

      

         
        if($request->file->move(public_path('article'),$imageName)):


             flashy()->success('Article enregistré avec succès');
             if(\App\article::create([

                'categories'=>$request->categorie,
                'nom'=>$request->name,
                'quantity'=>$request->stock,
                'color'=>$request->color,
                'price'=>$request->price,
                'images'=>'/article/'.$imageName,

             ])):
              return redirect('admin/');

             else:

                return redirect('admin/add');

            
             endif;


        else:

            return redirect('admin/add');


        endif;

          
    }
}
