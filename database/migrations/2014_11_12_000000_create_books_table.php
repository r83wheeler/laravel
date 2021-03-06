<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text("excerpt");
            $table->char("isbn", 13);
            $table->double('cost');
            $table->text('genre');
            $table->integer("pages");
            $table->double('value');
            $table->datetime('released');
            $table->integer('status');
            $table->integer('current_location')->default(100);
            $table->text("current_condition");
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
        Schema::dropIfExists('users');
    }
}
