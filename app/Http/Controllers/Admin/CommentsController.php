<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
 public function __construct(){
 // $this->middleware('auth',['except'=>['index','show']]);
 }
 
 public function index()
 {
 //
 $comments = Comment::paginate(6);
 return view('admin.comments.index',compact('comments'));
 }

 public function create()
 {
 //
 //Muestra un formulario para guardar un recurso
 $comment = new Comment();
 return view('admin.comments.create',compact('comment'));
 }
 public function store(Request $request)
 {
 $options = [
 'Nombre'=>$request->Nombre,
 'Dirección'=>$request->Dirección,
 'Teléfono'=>$request->Teléfono,
 'Correo'=>$request->Correo,
 'Asunto'=>$request->Asunto,
 'Comentario'=>$request->Comentario
 ];
 if(Comment::create($options)){
 return redirect('admin/comments');
 }else{
 return view('admin.comments.create');
 }
 }
 public function show($id)
 {
 //
 }
 public function edit($id)
 {
 $comment = Comment::find($id);
 return view("admin.comments.edit",compact('comment'));
 }
 public function update(Request $request, $id)
 {
 
 $comment = Comment::find($id);
 $comment->Nombre = $request->Nombre;
 $comment->Dirección = $request->Dirección;
 $comment->Teléfono = $request->Teléfono;
 $comment->Correo = $request->Correo;
 $comment->Asunto = $request->Asunto;
 $comment->Comentario = $request->Comentario;

 if($comment->save()){
 return redirect('admin/comments');
 }else{
 return view("admin.comments.edit",compact('comment'));
 }
 }

 public function destroy($id)
 {
 //
Comment::destroy($id);
 return redirect('admin/comments');
 }
}













