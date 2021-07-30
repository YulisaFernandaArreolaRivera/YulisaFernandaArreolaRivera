<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Oferta extends Model
{
    use HasFactory;
    public $fillable = ['Nombre','Precio','Descripción','image_url'];
    public function url(){
        return $this->id ? 'admin.ofertas.update': 'admin.ofertas.store';
    }
    
    public function method(){
        return $this->id ? 'PUT': 'POST';
    }
   
}
