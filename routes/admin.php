
<?php
Route::group(['prefix' => 'admin'], function () {
 Route::get('login', [App\Http\Controllers\Admin\LoginController::class,'showLoginForm'])->name('admin.login');
 Route::post('login', [App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login.post');
 Route::get('logout', [App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');

   //Rutas categoria
  Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [App\Http\Controllers\Admin\CategoriesController::class,'index'])->name('admin.categories.index');
    Route::get('/create', [App\Http\Controllers\Admin\CategoriesController::class,'create'])->name('admin.categories.create');
    Route::post('/store', [App\Http\Controllers\Admin\CategoriesController::class,'store'])->name('admin.categories.store');
    Route::get('/{id}/edit', [App\Http\Controllers\Admin\CategoriesController::class,'edit'])->name('admin.categories.edit');
    Route::put('/update/{id}', [App\Http\Controllers\Admin\CategoriesController::class,'update'])->name('admin.categories.update');
    Route::get('/{id}/delete', [App\Http\Controllers\Admin\CategoriesController::class,'destroy'])->name('admin.categories.destroy');
   });
 
     //Rutas productos
     Route::group(['prefix'  =>  'products'], function () {
      Route::get('/', [App\Http\Controllers\Admin\ProductsController::class,'index'])->name('admin.products.index');
      Route::get('/create', [App\Http\Controllers\Admin\ProductsController::class,'create'])->name('admin.products.create');
      Route::post('/store', [App\Http\Controllers\Admin\ProductsController::class,'store'])->name('admin.products.store');
      Route::get('/{id}/edit', [App\Http\Controllers\Admin\ProductsController::class,'edit'])->name('admin.products.edit');
      Route::put('/update/{id}', [App\Http\Controllers\Admin\ProductsController::class,'update'])->name('admin.products.update');
      Route::get('/{id}/delete', [App\Http\Controllers\Admin\ProductsController::class,'destroy'])->name('admin.products.destroy');
  });

  //Rutas de ofertas
  Route::group(['prefix'  =>  'ofertas'], function () {
    Route::get('/', [App\Http\Controllers\Admin\OfertasController::class,'index'])->name('admin.ofertas.index');
    Route::get('/create', [App\Http\Controllers\Admin\OfertasController::class,'create'])->name('admin.ofertas.create');
    Route::post('/store', [App\Http\Controllers\Admin\OfertasController::class,'store'])->name('admin.ofertas.store');
    Route::get('/{id}/edit', [App\Http\Controllers\Admin\OfertasController::class,'edit'])->name('admin.ofertas.edit');
    Route::put('/update/{id}', [App\Http\Controllers\Admin\OfertasController::class,'update'])->name('admin.ofertas.update');
    Route::get('/{id}/delete', [App\Http\Controllers\Admin\OfertasController::class,'destroy'])->name('admin.ofertas.destroy');
});

   //Rutas contactos
   Route::group(['prefix'  =>  'contacts'], function () {
    Route::get('/', [App\Http\Controllers\Admin\ContactsController::class,'index'])->name('admin.contacts.index');
    Route::get('/create', [App\Http\Controllers\Admin\ContactsController::class,'create'])->name('admin.contacts.create');
    Route::post('/store', [App\Http\Controllers\Admin\ContactsController::class,'store'])->name('admin.contacts.store');
    Route::get('/{id}/edit', [App\Http\Controllers\Admin\ContactsController::class,'edit'])->name('admin.contacts.edit');
    Route::put('/update/{id}', [App\Http\Controllers\Admin\ContactsController::class,'update'])->name('admin.contacts.update');
    Route::get('/{id}/delete', [App\Http\Controllers\Admin\ContactsController::class,'destroy'])->name('admin.contacts.destroy');
});

   

Route::get('/pagar', 'App\Http\Controllers\PaymentsController@pay')->name('payments.pay');
Route::group(['middleware' => ['auth:admin']], function () {
    
    Route::get('/admin', function () {return view('admin.dashboard.index');})->name('admin.dashboard');
    });  
});

