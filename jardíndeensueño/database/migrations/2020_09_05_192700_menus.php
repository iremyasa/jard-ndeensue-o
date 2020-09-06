<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('baslangic');
            $table->string('anayemek');
            $table->string('tatli');
            $table->string('photo')->nullable();
            $table->decimal('price', 5, 2)->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes(); //MUTLAKA ekleyiniz


            //$table->foreign('created_by')->references('id')->on('users')->cascadeOnDelete();
            //$table->foreign('updated_by')->references('id')->on('users')->cascadeOnDelete();
            //$table->foreign('deleted_by')->references('id')->on('users')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
