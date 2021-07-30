<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function __construct(){
        // $this->middleware('auth',['except'=>['index','show']]);
        }
        public function index()
        {
        //
        $categories = Category::paginate(6);
        return view('admin.categories.index',compact('categories'));
        }
        public function create()
        {
        //
        //Muestra un formulario para guardar un recurso
        $category = new Category();
        return view('admin.categories.create',compact('category'));
        }
        public function store(Request $request)
        {
        
            
        $options = [
        'Nombre'=>$request->Nombre,
        'Cantidad'=>$request->Cantidad,
        'Genero'=>$request->Genero,
        'Color'=>$request->Color,
        ];
        if(Category::create($options)){
        return redirect('admin/categories');
        }else{
        return view('admin.categories.create');
        }
        }
        public function show($id)
        {
        //
        }
        public function edit($id)
        {
        $category = Category::find($id);
        return view("admin.categories.edit",compact('category'));
        }
        public function update(Request $request, $id)
        {
        $category = Category::find($id);
        $category->Nombre = $request->Nombre;
        $category->Cantidad = $request->Cantidad;
        $category->Genero = $request->Genero;
        $category->Color = $request->Color;

        if($category->save()){
        return redirect('admin/categories');
        }else{
        return view("admin.categories.edit",compact('category'));
        }
        }
       
        public function destroy($id)
        {
        //
       Category::destroy($id);
        return redirect('admin/categories');
        }
       }
       
       