<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->foreignId('admin_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('product_type_id')->constrained();
            $table->string('code')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->bigInteger('price')->default(0);
            $table->bigInteger('discount')->nullable()->default(0);
            $table->text('description')->nullable();
            $table->json('specifications')->nullable();
            $table->integer('quality')->nullable()->default(0);
            $table->string('image')->nullable();
            $table->string('warranty')->nullable();
            $table->integer('view')->nullable()->default(0);
            $table->integer('hot')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
