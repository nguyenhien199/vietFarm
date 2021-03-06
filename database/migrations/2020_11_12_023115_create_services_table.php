<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('url')->unique();
            $table->string('url_video')->nullable();
            $table->string('image')->nullable();
            $table->text('description');
            $table->text('content');
            $table->boolean('status');
            $table->softDeletes();
            $table->timestamps();
            $table->integer('created_by')->nullable(false);
            $table->integer('updated_by')->nullable(false);

            // constraint
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
