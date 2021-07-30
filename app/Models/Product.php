<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    public $fillable = ['category_id','Nombre','Precio','Descripción','Cantidad','image_url'];
    public function url(){
        return $this->id ? 'admin.products.update': 'admin.products.store';
    }
    
    public function method(){
        return $this->id ? 'PUT': 'POST';
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }  
    
    

    
}
