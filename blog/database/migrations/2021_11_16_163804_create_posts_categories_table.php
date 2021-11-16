<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatPostCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
{
    Schema::create('posts_category', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('posts_id');
        $table->integer('category_id');
    });
}
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

