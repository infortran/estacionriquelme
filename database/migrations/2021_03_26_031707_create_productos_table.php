<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->integer('categoria_id')->unsigned()->default(0);
            $table->string('title');
            $table->string('description')->nullable()->default(null);
            $table->string('icon');
            $table->integer('m_price');
            $table->integer('s_price')->nullable()->default(null);
            $table->string('m_capacity')->nullable()->default(null);
            $table->string('s_capacity')->nullable()->default(null);
            $table->boolean('enabled')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
