<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultural_categories', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('route')->nullable();
            $table->text('description')->nullable();

            $table->string('order')->nullable();
            $table->tinyInteger('status')->default(1);

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

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
        Schema::dropIfExists('cultural_categories');
    }
};
