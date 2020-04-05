<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class ProductController extends Controller
{
    //
    function index(){
        //return Product::all();
        //return Product::find(1);
        $prod =Product::all();// select * products;
        return view('product.index',['products'=>$prod]);
    }
// show form 
    function addForm(){

        return view("product.add");
    }

    // handle to upload image and save info to database
    function postAdd(Request $request){
        $product = new Product;// create obj -> store in memory 
        $product->name = $request->input('name',"abc"); // get data from request then asign to field 
        $product->code = $request->input('code');
        $product->exp = $request->input('exp');
        $product->price = $request->price;
       // $product->af = $request->afd;
        if($request->file('imgs')){ // $_FILES['imgs']
            $file = $request->file('imgs');
            $fname= $file->getClientOriginalName();
            $file->move('images',$fname);
            $product->path= $fname; // will add later 
            echo "fill uploaded ".$fname;
        }

        $product->save();  // store to database
       //print_r($request->input('name'));
        return "<br> success";
    }

    function editForm(Request $request, $id){
        $product= Product::find($id);// select * from products where id = 1;
        if(!$product){
            return redirect('/products');
        }
        //print_r($product);
        //return "end ";
        //$product = new Product
        // $product->name = "apple";
        // $product->id ....
        // $product->code =     
        //echo $product->name;   
        return view('product.edit',['product'=>$product]);
    }

    function saveEdit(Request $request,$id){
        $id = $request->input('id',$id);
       // $product = new Product;
        $product = Product::find($id);// retrieve old data from database
        //$product->id = $request->input('id',$id);// 
        $product->name = $request->input('name',"abc"); // get data from request then asign to field 
        $product->code = $request->input('code');
        $product->exp = $request->input('exp');
        $product->price = $request->price;
       // $product->af = $request->afd;
        if($request->file('imgs')){ // $_FILES['imgs']
            $file = $request->file('imgs');
            $fname= $file->getClientOriginalName();
            $file->move('images',$fname);
            $product->path= $fname; // will add later 
            echo "fill uploaded ".$fname;
        }

        $product->save();
        echo "edited";
    }

    function destroy(Request $request){
        $id =  $request->input('id');
        $res = Product::destroy($id);
        return redirect('/products');
       // echo "delete func";
    }

}