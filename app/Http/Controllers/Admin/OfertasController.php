<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Resources\OfertasCollection;
use Illuminate\Http\Request;
use App\Models\Oferta;


class OfertasController extends Controller
{
 public function __construct(){
 // $this->middleware('auth',['except'=>['index','show']]);
 }
 
 public function index()
 {
 //
 $ofertas = Oferta::paginate(10);
 return view('admin.ofertas.index',compact('ofertas'));
 }

 public function create()
 {
 //
 //Muestra un formulario para guardar un recurso
 $oferta = new Oferta();
 return view('admin.ofertas.create',compact('oferta'));
 }
 
 public function store(Request $request)
 {
    if($request->hasFile('image_url')){
        $image = $request->file('image_url');
        $nombreImg =Time().'.'.$image->getClientOriginalExtension();
        $destinoPath = 'Imagenes/';
        $uploadSuccess =$request->file('image_url')->move($destinationPath, $nombreImg);
    $ruta = $destinationPath . $nombreImg;

    } else{
        
        $destinoPath = 'Imagenes/'; 
        $ruta = $destinoPath . $nombreImg;
    }    
 $options = [
 'Nombre'=>$request->Nombre,
 'Precio'=>$request->Precio,
 'Descripción'=>$request->Descripción,
 'image_url'=>$request->image_url =$ruta
 
 ];
 if(Oferta::create($options)){
 return redirect('admin/ofertas');
 }else{ 
 return view('admin.ofertas.create');
 }
 }

 public function show($id)
 {
 //
 }
 
 public function edit($id)
 {
 $oferta = Oferta::find($id);
 return view("admin.ofertas.create",compact('oferta'));
 }
 
 public function update(Request $request, $id)
 {
 
 $oferta = Oferta::find($id);
 
 if($request->hasFile('image_url')){
    $image = $request->file('image_url');
    $nombreImg =Time().'.'.$image->getClientOriginalExtension();
    $destinoPath = 'Imagenes/';
    $uploadSuccess =$request->file('image_url')->move($destinoPath, $nombreImg);
$ruta = $destinoPath . $nombreImg;

} else{
    $ruta = $oferta->image_url;
    
}

 $oferta  ->Nombre = $request->Nombre;
 $oferta  ->Precio = $request->Precio;
 $oferta  ->Descripción = $request->Descripción;
 $oferta->image_url= $request->image_url =$ruta;

 if($oferta->save()){
 return redirect('admin/ofertas');
 }else{
 return view("admin.ofertas.edit",compact('oferta'));
 }
 }

 public function destroy($id)
 {
 //
Oferta::destroy($id);
 return redirect('admin/ofertas');
 }
}













