<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
 public function __construct(){
 // $this->middleware('auth',['except'=>['index','show']]);
 }
 
 public function index()
 {
 //
 $contacts = Contact::paginate(6);
 return view('admin.contacts.index',compact('contacts'));
 }

 public function create()
 {
 //
 //Muestra un formulario para guardar un recurso
 $contact = new Contact();
 return view('admin.contacts.create',compact('contact'));
 }
 
 public function store(Request $request)
 {
 //
 $options = [
 'Nombre'=>$request->Nombre,
 'Correo'=>$request->Correo,
 'Dirección'=>$request->Dirección,
 'Teléfono'=>$request->Teléfono,
 
 ];
 if(Contact::create($options)){
 return redirect('admin/contacts');
 }else{
 return view('admin.contacts.create');
 }
 }

 public function show($id)
 {
 //
 }
 
 public function edit($id)
 {
 $contact = Contact::find($id);
 return view("admin.contacts.edit",compact('contact'));
 }
 
 public function update(Request $request, $id)
 {
 
 $contact = Contact::find($id);
 $contact ->Nombre = $request->Nombre;
 $contact ->Correo = $request->Correo;
 $contact ->Dirección = $request->Dirección;
 $contact ->Teléfono = $request->Teléfono;

 if($contact->save()){
 return redirect('admin/contacts');
 }else{
 return view("admin.contacts.edit",compact('contact'));
 }
 }

 public function destroy($id)
 {
 //
Contact::destroy($id);
 return redirect('admin/contacts');
 }
}













