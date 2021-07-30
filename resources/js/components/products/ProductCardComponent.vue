<template>
        <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card">
        <div class="padding text-center bg-primary"></div>
      <header class="padding">
       <a :href="'/productos/' + product.id"><img :src= "product.image_url" width="200" height="180" class="mx-auto d-block"></a>
    </header>
    <div class="card-body">
       <a :href="'/productos/'+product.id"> <h2 class="card-title">{{product.Nombre}}</h2> </a>
        <h4 class="card-subtitle">Precio: ${{product.Precio}}</h4>
        <p class="card-text">{{product.Descripción}}</p>
         <p class="card-text">{{product.Cantidad}}</p>
          <p class="card-text">{{product.Imagen}}</p>
    </div>
   </div>
        </div>
</template>
<script>
export default {
    //Props: Propiedades que se especifican, y pueden enviarse via atributos hacia el componente
    props:{
        product:{ //Se crea un prop de tipo product
            type: Object //Se recibe un json de configuración el cual recibe un dato de tipo Object
        }
    }
}
</script>
