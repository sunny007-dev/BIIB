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
        Schema::create('founder', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title',100)->nullable();
            $table->string('slug',100)->nullable();

            $table->string('thumbnail_url',100)->nullable();
            $table->string('url',100)->nullable();
           
            $table->string('featured_image',100)->nullable();
            $table->string('featured_image_description',100)->nullable();
            
            $table->string('content_heading_1',100)->nullable();
            $table->text('content_1')->nullable();
            $table->string('content_heading_2',100)->nullable();
            $table->text('content_2')->nullable();

            $table->string('image_1',100)->nullable();
            $table->string('image_description_1',100)->nullable();

            $table->string('image_2',100)->nullable();
            $table->string('image_description_2',100)->nullable();

            $table->string('image_3',100)->nullable();
            $table->string('image_description_3',100)->nullable();

            $table->string('image_4',100)->nullable();
            $table->string('image_description_4',100)->nullable();

            $table->string('image_5',100)->nullable();
            $table->string('image_description_5',100)->nullable();

            $table->string('image_6',100)->nullable();
            $table->string('image_description_6',100)->nullable();

            $table->string('image_7',100)->nullable();
            $table->string('image_description_7',100)->nullable();

            $table->string('image_8',100)->nullable();
            $table->string('image_description_8',100)->nullable();

            $table->string('image_9',100)->nullable();
            $table->string('image_description_9',100)->nullable();

            $table->string('image_10',100)->nullable();
            $table->string('image_description_10',100)->nullable();

            $table->string('image_11',100)->nullable();
            $table->string('image_description_11',100)->nullable();

            $table->string('image_12',100)->nullable();
            $table->string('image_description_12',100)->nullable();

            $table->string('image_13',100)->nullable();
            $table->string('image_description_13',100)->nullable();

            $table->string('image_14',100)->nullable();
            $table->string('image_description_14',100)->nullable();

            $table->string('image_15',100)->nullable();
            $table->string('image_description_15',100)->nullable();

            $table->string('video_url_1',100)->nullable();
            $table->string('video_thumbnail_1',100)->nullable();
            $table->string('video_description_1',100)->nullable();

            $table->string('video_url_2',100)->nullable();
            $table->string('video_thumbnail_2',100)->nullable();
            $table->string('video_description_2',100)->nullable();

            $table->string('video_url_3',100)->nullable();
            $table->string('video_thumbnail_3',100)->nullable();
            $table->string('video_description_3',100)->nullable();

            $table->string('video_url_4',100)->nullable();
            $table->string('video_thumbnail_4',100)->nullable();
            $table->string('video_description_4',100)->nullable();

            $table->string('video_url_5',100)->nullable();
            $table->string('video_thumbnail_5',100)->nullable();
            $table->string('video_description_5',100)->nullable();

            $table->string('video_url_6',100)->nullable();
            $table->string('video_thumbnail_6',100)->nullable();
            $table->string('video_description_6',100)->nullable();

            $table->string('video_url_7',100)->nullable();
            $table->string('video_thumbnail_7',100)->nullable();
            $table->string('video_description_7',100)->nullable();

            $table->string('video_url_8',100)->nullable();
            $table->string('video_thumbnail_8',100)->nullable();
            $table->string('video_description_8',100)->nullable();

            $table->string('video_url_9',100)->nullable();
            $table->string('video_thumbnail_9',100)->nullable();
            $table->string('video_description_9',100)->nullable();

            $table->string('video_url_10',100)->nullable();
            $table->string('video_thumbnail_10',100)->nullable();
            $table->string('video_description_10',100)->nullable();

            $table->string('video_url_11',100)->nullable();
            $table->string('video_thumbnail_11',100)->nullable();
            $table->string('video_description_11',100)->nullable();

            $table->string('video_url_12',100)->nullable();
            $table->string('video_thumbnail_12',100)->nullable();
            $table->string('video_description_12',100)->nullable();

            $table->string('video_url_13',100)->nullable();
            $table->string('video_thumbnail_13',100)->nullable();
            $table->string('video_description_13',100)->nullable();

            $table->string('video_url_14',100)->nullable();
            $table->string('video_thumbnail_14',100)->nullable();
            $table->string('video_description_14',100)->nullable();

            $table->string('video_url_15',100)->nullable();
            $table->string('video_thumbnail_15',100)->nullable();
            $table->string('video_description_15',100)->nullable();

            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_og_image')->nullable();
            $table->string('meta_og_url')->nullable();

            $table->string('order')->nullable();
            $table->tinyInteger('status')->default(0);

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
        Schema::dropIfExists('founder');
    }
};
