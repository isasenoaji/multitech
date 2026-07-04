<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeLengthOnBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("blog",function(Blueprint $table){
            $table->text("judul")->change();
            $table->text("detail")->change();
        });

        Schema::table("galeri",function(Blueprint $table){
            $table->text("judul")->change();
            $table->text("deskripsi")->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("blog",function(Blueprint $table){
            $table->string("judul", 100)->change();
            $table->string("detail", 1000)->change();
        });

        Schema::table("galeri",function(Blueprint $table){
            $table->string("judul", 100)->change();
            $table->string("deskripsi", 100)->change();
        });
    }
}
