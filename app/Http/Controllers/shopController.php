<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Department;
use App\Models\Category;

class shopController extends Controller
{
    public $products;

    function __construct()
    {
        $this->products = DB::table('products')
            ->join('departments', 'products.departments_id', '=', 'departments.id')
            ->join('categories','products.categories_id', '=', 'categories.id')
            ->select(
                'products.*',
                'departments.slug as departments_slug',
                'categories.slug as categories_slug'
        )->get()->shuffle();
    }

    public function showDepartments()
    {
        $departments = Department::all();
        return view('pages/shops/shop_department', ['departments' => $departments, 'products' => $this->products]);
    }

    public function showCategories($department)
    {
        $categories = Category::all();
        return view('pages/shops/shop_categories', 
            [
                'department' => $department,
                'categories' => $categories, 
                'products' => $this->products
        ]);
    }

    public function showProducts($department, $category)
    {
        $departments_id = Department::where('slug', $department)->select('id')->firstOrFail()->id;
        $categories_id =  Category::where('slug', $category)->select('id')->firstOrFail()->id;

        $product_by_department_and_category = DB::table('products')
                ->select('*')
                ->where('departments_id', "$departments_id")
                ->where('categories_id', "$categories_id")
                ->get();
        return view('pages/shops/shop_product', 
            [
                'department' => $department,
                'category' => $category,
                'product_by_department_and_category' => $product_by_department_and_category,
                'products' => $this->products
        ]);
    }
}
