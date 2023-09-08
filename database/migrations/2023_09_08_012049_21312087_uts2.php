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
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('uts2_1');
                $table->string('uts2_2');
                $table->string('uts2_3');
                $table->string('id_uts1');
                $table->string('id_uts3');
                $table->timestamps(); // Tambahkan timestamps() di sini
            }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
*/}
    public function down()
    
    {
            Schema::dropIfExists('users');
    //
    }
};