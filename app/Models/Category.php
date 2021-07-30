<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

public $fillable = ['Nombre','Cantidad','Genero','Color'];

public function url(){
return $this->id ? 'admin.categories.update': 'admin.categories.store';
}

public function method(){
return $this->id ? 'PUT': 'POST';
}
public function products(){
    return $this->hasMAny (Products::class);
    }
}