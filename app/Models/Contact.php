<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = ['Nombre','Correo','Dirección','Teléfono'];
    
    public function url(){
    return $this->id ? 'admin.contacts.update': 'admin.contacts.store';
    }
    
    public function method(){
    return $this->id ? 'PUT': 'POST';
    }
    }