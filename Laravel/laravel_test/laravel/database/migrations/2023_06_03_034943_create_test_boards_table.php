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
        Schema::create('test_boards', function (Blueprint $table) {
            // id(pk), title, content, created_at, updated_at, deleted_at, delete_flg, write_user_id
            $table->id();
            $table->string('title', 100); //varchar(100)으로 생성, not null기본 
            $table->string('content',4000);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->char('deleted_flg',1)->default('0');
            // $table->bigInteger('write_user_id');
            $table->foreignId('write_user_id')->constrained('users')->onDelete('cascade'); //constrain시키면 외래키를 참조해서 강제로 잡아 준다.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_boards');
    }
};
