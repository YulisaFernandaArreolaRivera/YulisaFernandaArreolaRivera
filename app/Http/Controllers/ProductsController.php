<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductsCollection;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class ProductsController extends Controller
{
    public function __construct(){
        // $this->middleware('auth',['except'=>['index','show']]);
    }
  
    public function index(Request $request){
        $products = Product::paginate(10);
        
        if($request->wantsJson()){
      
            return new ProductsCollection($products);
        }
       
        return view('products.index',compact('products'));
        }
        public function show($id)
        {
            $product = Product::find($id);
            return view('products.show',compact('product'));
        }

        public function productsByCategory($cat)
    {
        $products = Product::where('category_id', '=', $cat)->paginate(6);
        return view('products.categoria',compact('products'));
    }


}