<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenplate_name',50)->unique();
            $table->string('template_img');
            $table->unsignedTinyInteger('template_show')->default(1);
            $table->double('template_price')->default(0);
            $table->string('template_link');
            $table->unsignedInteger('category_template_id');
            $table->foreign('category_template_id')->references('id')->on('category_templates')->onDelete('cascade');
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
        Schema::dropIfExists('templates');
    }
}
