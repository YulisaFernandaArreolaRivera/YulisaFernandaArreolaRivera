<template>
        <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card">
        <div class="padding text-center bg-primary"></div>
      <header class="padding">
       <a :href="'/ofertas/' + oferta.id"><img :src= "oferta.image_url" width="200" height="180" class="mx-auto d-block"></a>
    </header>
    <div class="card-body">
       <a :href="'/ofertas/'+oferta.id"> <h2 class="card-title">{{oferta.Nombre}}</h2> </a>
        <h4 class="card-subtitle">Precio: ${{oferta.Precio}}</h4>
        <p class="card-text">{{oferta.Descripción}}</p>
          <p class="card-text">{{oferta.Imagen}}</p>
    </div>
   </div>
        </div>
</template>
<script>
export default {
    //Props: Propiedades que se especifican, y pueden enviarse via atributos hacia el componente
    props:{
        oferta:{ //Se crea un prop de tipo product
            type: Object //Se recibe un json de configuración el cual recibe un dato de tipo Object
        }
    }
}
</script>
