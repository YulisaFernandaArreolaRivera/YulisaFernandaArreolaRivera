<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateOfertasTable extends Migration
{
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
           $table->text('Nombre');
            $table->double('Precio');
            $table->text('Descripción');
            $table->string('image_url');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
