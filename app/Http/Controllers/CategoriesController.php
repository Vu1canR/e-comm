<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;
use App\subcategory;
use App\processor;
use App\product;
use App\pspec;
use App\product_spec;
use App\Spec;

class CategoriesController extends Controller
{
    public function show($category){

        $category_name = str_replace("-"," ", $category);

        // $subcategiries = category::where('name', $category_name)
        //                         ->first()->subcategories;
        $categories = Category::all();
        $chosen_category = Category::where('name', $category_name)->with('subcategories.amount')->first();
        // return $categories;
     
        return view('categories', compact('chosen_category', 'categories'));

    }
}
