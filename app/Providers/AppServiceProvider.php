<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    
    public function boot()
    {
      /*
       Función que se ejecuta en cuanto se despliega una vista
       */
      

       View::composer('*', function($view){
        $categoria= Category::All(); 
        $view->with('categoria',$categoria);
       });
    }
}
