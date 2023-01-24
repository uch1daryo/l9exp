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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facility_id')->constrained();
            $table->string('user_id', '10');
            $table->string('user_name', '100');
            $table->string('user_name_kana', '100');
            $table->string('user_email', '100');
            $table->dateTime('usage_start_at');
            $table->dateTime('usage_end_at');
            $table->string('phone_number', '100');
            $table->enum('purpose_of_use', ['training', 'game', 'fellowship', 'class', 'other']);
            $table->integer('number_of_users');
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
        Schema::dropIfExists('reservations');
    }
};
