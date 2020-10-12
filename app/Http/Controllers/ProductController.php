<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;

class ProductController extends Controller
{
    public function showCommentsByUsers($id=null){
        $commentUser = Comment::all()->where('user_id','=',$id);
        return $commentUser;
    }

    public function showCommentsByProducts($id=null){
        $commentProduct = Comment::all()->where('product_id','=',$id);
        return $commentProduct;
    }



    

    public function showComments($id){
        // $id_r =  $r->get('id');
        // $id = Comentario::find($id_r);
         $comment = Comment::all()->where('user_id','=', $id);
        
         return $comment;
     }


    public function addProducts(Request $r){
        $product = new Product();
        $product->name = $r->get('name');
        $product->save();
    }

    public function addCommnets(){

    }
    
}
