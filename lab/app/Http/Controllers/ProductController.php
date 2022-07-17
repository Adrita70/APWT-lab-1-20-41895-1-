<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    function list(){
        
        $product = array();
        for($i=1;$i<=10;$i++){
            $product = array(
                "id"=>$i,
                "name"=>"Book $i",
                "copy"=>"12"
            );
            $product[] = (object)$product;
        }

        return view('product.list')
               ->with('product',$product);
    }

    function product($id)
    {      
        $name = "<h1>Tin Goyenda</h1>";
        $copy = "12";
        return view('product.list')
        ->with('n',$name)
        ->with('id',$id)
        ->with('copy',$copy);
    }
}
