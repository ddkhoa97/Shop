<?php

namespace App\Http\Controllers;
use App\Pants;
use App\Product;
use Illuminate\Http\Request;
use App\Type;

class ProductController extends Controller
{
    public function listproductpants($id)
    
    {
       
        $result=Product::where('id_type',$id)->get();
      
        return view('listproduct.pants',compact('result'));
    }
    public function listproductshorts($id)
    
    {
       
        $result=Product::where('id_type',$id)->get();
      
        return view('listproduct.shorts',compact('result'));
    }
    public function listproductshirts($id)
    
    {
       
        $result=Product::where('id_type',$id)->get();
      
        return view('listproduct.shirts',compact('result'));
    }

    // public function listproductshirts()
    // {
    //     return view('listproduct.shirts');
    // }
    // public function listproductshorts()
    // {
    //     return view('listproduct.shorts');
    // }
   
   
    public function listproduct($name)
    {
       
        

        $id_category=Type::join('category','category.id','=','type.id_category')
        ->where('category.slug','=',$name)
        ->select('category.id')->distinct()->first();
      
        $result=Product::join('type','type.id','=','product1.id_type')->join('category','category.id','=','type.id_category')->select('*','product1.id AS id_product')->get();
     
      if($name == 'shirts')
      {
         return view('listproduct.listshirts',compact('result'));
      }
      if($name == 'pants')
      {
        
         return view('listproduct.listpants',compact('result'));
      }
      if($name == 'shorts')
      {
         return view('listproduct.listshorts',compact('result'));
      }
    }
}
