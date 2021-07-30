<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\ProductsCollection;


class ProductsCollection extends ResourceCollection
{public function toArray($request)
    {
    //return parent::toArray($request);
    return [
    'data'=> $this->collection->transform(function($element){
    return[
        'id'=> $element->id,
    'Nombre'=> $element->Nombre,
    'Precio'=>$element->Precio,
    'Descripción'=>$element->Descripción,
    'Cantidad' =>$element->Cantidad,
    'image_url' => $element->image_url,
    ];
    })
    ];
   
    }
   
}
