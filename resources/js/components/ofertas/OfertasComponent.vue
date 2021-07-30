<template>
<section>

   <material-transition-group tag="div" class="row">  
        <oferta-card-component  v-bind:oferta="oferta" :data-index="index" v-for="(oferta, index) in ofertas" :key="oferta.id">
            
        </oferta-card-component>       
   </material-transition-group>
</section>
                
</template>

<script>
    export default {
      data(){
          return{
              name: 'Ofertas component',
              ofertas: [], //Array que será llenado con los datos de la petición
              endPoint: "/Ofertas" //Ruta de la petición
          }
      },
      created(){  
     //En cuanto el componente se crea, manda llamar al método fetchProducts
          this.fetchOfertas(); 
      },
       
    //Se definen los métodos que ejecutará el componente vía una propiedad methods
      methods: {
        //Método que ejecutará una petición asíncrona al servidor
          fetchOfertas(){
         /*
        Axios se encarga de enviar la información al servidor al mismo tiempo
        verificar que dicha petición es válida
        */
              axios.get(this.endPoint).then((response)=>{
              console.log(response.data.data); //Verificamos qué devolvió los datos de la petición
              this.ofertas = response.data.data;
              });
          }  
      }      
    }
</script>


