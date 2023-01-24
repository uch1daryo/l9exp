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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jurisdiction_id')->constrained();
            $table->string('name', '100');
            $table->enum('kind', ['lecture_room', 'meeting_room', 'ground', 'court', 'other']);
            $table->string('building_name', '100')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('area')->nullable();
            $table->integer('regular_capacity')->nullable();
            $table->integer('irregular_capacity')->nullable();
            $table->string('note', '100')->nullable();
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
        Schema::dropIfExists('facilities');
    }
};
