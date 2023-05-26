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
        Schema::create('prboards', function (Blueprint $table) {
            $table->id('No');
            $table->string('title', 30);
            $table->string('content', 2000);
            $table->integer('hits');
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
        Schema::dropIfExists('prboards');
    }
};
