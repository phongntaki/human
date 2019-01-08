<?php

namespace App\Http\Controllers;

use App\ListProduct;
use App\Product;
use App\ModProduct;
use App\ProductStt;
use App\ProductDetail;
use App\ProductImage;
use App\Order;
use App\OrderProduct;
use App\Warehouse;

use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDelImg($id, Request $request){
        if($request->ajax()){
            $img_detail   =  ProductImage::find($id);
            if(!empty($img_detail)){
                $imgold = $img_detail->image;
                if($imgold !="no-img.png"){
                    while(file_exists("public/img/product/Pdetail/".$imgold))
                    {
                        unlink("public/img/product/Pdetail/".$imgold);
                    }
                }
                $img_detail->delete();
            }
            return 'true';
        }
        
    }
    public function Changehide(Request $request){
        if($request->ajax()){
            $id = (int)$request->idpr;
            $product = Product::find($id);
            if($product->hide == NULL || $product->hide == 0 ){
                $product->hide = 1;
                $product->save();
                return 1;
            }else{
                $product->hide = 0;
                $product->save();
                return 1;
            }
            
        }else{
            return 0;
        }
    }
}
