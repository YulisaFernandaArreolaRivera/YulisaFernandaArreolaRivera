<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\OfertasCollection;

class OfertasCollection extends ResourceCollection
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
    'image_url' => $element->image_url,
    ];
    })
    ];
    }
   
}
