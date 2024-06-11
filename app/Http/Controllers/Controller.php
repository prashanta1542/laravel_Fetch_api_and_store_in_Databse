<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function myApi(){
        $res=Http::get('https://fakestoreapi.com/products');
        $myapi=json_decode($res->body(),true);
        

        foreach($myapi as $api){
                $product=new Product();
                $product->title=$api['title'];
                $product->price=$api['price'];
                $product->category=$api['category'];
                $product->save();
        }
        
        return view('api',compact('myapi'));
    }
}
 