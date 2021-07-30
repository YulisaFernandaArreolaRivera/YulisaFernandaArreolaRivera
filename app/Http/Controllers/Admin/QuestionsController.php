<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    public function index()
 {
 //
 $questions = Question::paginate(6);
 return view('admin.questions.index',compact('questions'));
 }

 public function create()
 {

 $question = new Question();
 return view('admin.questions.create',compact('question'));
 }

 public function store(Request $request)
 {
 //
 $options = [
 'Nombre'=>$request->Nombre,
 'Correo'=>$request->Correo,
 'Pregunta'=>$request->Pregunta,
 'Teléfono'=>$request->Teléfono
 ];
 if(Question::create($options)){
 return redirect('admin/questions');
 }else{
 return view('admin.questions.create');
 }
 }
 
 public function show($id)
 {
 //
 }

 public function edit($id)
 {
 //
 $question = Question::find($id);
 return view("admin.questions.edit",compact('question'));
 }
 
 public function update(Request $request, $id)
 {
 //
 $question = Question::find($id);
 $question->Nombre= $request->Nombre;
 $question->Correo= $request->Correo;
 $question->Pregunta = $request->Pregunta;
 $question->Teléfono= $request->Teléfono;
 
 if($question->save()){
 return redirect('admin/questions');
 }else{
 return view("admin.questions.edit",compact('question'));
 }
 }
 
 public function destroy($id)
 {
 //
 Question::destroy($id);
 return redirect('admin/questions');
 }
}