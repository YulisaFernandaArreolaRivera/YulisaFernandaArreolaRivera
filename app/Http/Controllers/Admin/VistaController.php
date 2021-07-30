<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
//use App\Models\Oferta;

class VistaController extends Controller
{
    
    public function Contacts(){
        $contacts= Contact::paginate(6);
        return view('FrontEnd.Contacts',compact('contacts'));
    }
    // public function Ofertas(){
    //     $ofertas= Oferta::paginate(10);
    //     return view('FrontEnd.Ofertas',compact('ofertas'));
    // }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
