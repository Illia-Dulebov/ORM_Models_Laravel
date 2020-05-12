<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('cat_id', 100);
            $table->string('description', 255);
            $table->string('image', 100);
            $table->float('price', 8, 2);
            $table->string('title', 100);
            $table->string('prod_id', 100);

            $table->index('title');
            $table->index('cat_id');
            $table->index('prod_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
