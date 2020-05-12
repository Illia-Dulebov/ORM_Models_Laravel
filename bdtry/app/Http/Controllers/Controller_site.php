<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Order;
use Illuminate\Http\Request;

class Controller_site extends Controller {
    public function control_products($id){
        $item = Product::find($id);
        if (empty($item)) {
            return "Error";
        }
        return view('welcome', ['prod'=>$item]);
    }

    public function control_categories($search){
        $item = Category::where('category_id', 'like' , "%$search%")->get();
        $tovar = $item[0]->products;
        return view('welcome', ['order'=>$tovar]);
    }

    public function control_orders($search){
        $item = Category::where('category_id', 'like' , "%$search%")->get();
        $tovar = $item[0]->pod;
        return view('welcome', ['order'=>$tovar]);
    }
}
