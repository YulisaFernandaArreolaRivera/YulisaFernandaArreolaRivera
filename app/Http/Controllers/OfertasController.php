<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Http\Resources\OfertasCollection;
use Illuminate\Support\Facades\DB;
class OfertasController extends Controller
{
    public function __construct(){
        // $this->middleware('auth',['except'=>['index','show']]);
    }
    public function index(Request $request){
        $ofertas = Oferta::paginate(10);
        
        if($request->wantsJson()){
      
            return new OfertasCollection($ofertas);
        }
        return view('ofertas.index',compact('ofertas'));
        }
        public function show($id)
        {
            $oferta = Oferta::find($id);
            return view('ofertas.show',compact('oferta'));
                }
} 