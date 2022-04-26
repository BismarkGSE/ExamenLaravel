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
        Schema::create('casals', function (Blueprint $table) {
            $table->id();
            $table->string('nomCasal');
            $table->date('data_inici');
            $table->date('data_final');
            $table->integer('n_places');
            $table->foreignId('id_ciutat')->unsigned()->references('id')->constrained('ciutats')->on('ciutats');
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
        Schema::dropIfExists('casals');
    }
};
