<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('commented_by_user_id');
            $table->unsignedInteger('todo_id');
            $table->string('comment');
            $table->timestamps();

            $table->foreign('commented_by_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('todo_id')->references('id')->on('todos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
