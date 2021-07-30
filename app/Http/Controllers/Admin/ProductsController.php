<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsCollection;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function __construct(){
        // $this->middleware('auth',['except'=>['index','show']]);
    }
    public function index()
    {
        $products = Product::paginate(12);
        $categories = Category::all();
        return view('admin.products.index',compact('products','categories'));
    }

    public function create()
    {
        //Muestra un formulario para guardar un recurso
        $product = new Product();
        $categories = Category::pluck('Nombre', 'id')->prepend('Selecciona una categoria', '');
        
        return view('admin.products.create',compact('product','categories'));
    }
    public function store(Request $request)
    {
        if($request->hasFile('image_url')){
            $image = $request->file('image_url');
            $nombreImg =Time().'.'.$image->getClientOriginalExtension();
            $destinoPath = 'Imagenes/';
            $uploadSuccess =$request->file('image_url')->move($destinoPath, $nombreImg);
        $ruta = $destinoPath . $nombreImg;
    
        } else{
            
            $destinoPath = 'Imagenes/'; 
            $ruta = $destinoPath . $nombreImg;
        } 

        $options = [
            'category_id'=>$request->category_id,
            'Nombre'=>$request->Nombre,
            'Precio'=>$request->Precio,
            'Descripción'=>$request->Descripción,
            'Cantidad'=>$request->Cantidad,
            'image_url'=>$request->image_url =$ruta
 
            ];
            if(Product::create($options)){
                return redirect('admin/products');
            }else{
                return view('admin.products.create');
            }
    }
    public function show($id)
    {
        
    }

    public function edit($id)
    
       

        {
            //
            $product = Product::find($id);
            $categories = Category::pluck('Nombre', 'id')->prepend('Selecciona una categoria', '');
           
         
            return view('admin.products.create',compact('product','categories'));
        }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
 
        if($request->hasFile('image_url')){
           $image = $request->file('image_url');
           $nombreImg =Time().'.'.$image->getClientOriginalExtension();
           $destinoPath = 'Imagenes/';
           $uploadSuccess =$request->file('image_url')->move($destinoPath, $nombreImg);
       $ruta = $destinoPath . $nombreImg;
       
       } else{
           $ruta = $oferta->image_url;
           
       }
        
        $product->Nombre = $request->Nombre;
        $product->Precio= $request->Precio;
        $product->Descripción = $request->Descripción;
        $product->Cantidad= $request->Cantidad;
        $product->Image_url= $request->image_url =$ruta;
        
        $product->category_id = $request->category_id;

        if($product->save()){
            return redirect('admin/products');
        }else{
            return view("admin.products.edit",compact('product'));
        }
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('admin/products');
    }
}

