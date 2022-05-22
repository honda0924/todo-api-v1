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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable(); // null許容
            $table->integer('priority')->default(0); // 初期値設定 low, middle, high
            $table->integer('severity')->default(0); // 初期値設定 low, middle, high
            $table->integer('status')->default(0); // 初期値設定 stacked, prepared, WIP, verifying, done
            $table->boolean('done')->default(false);
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
        Schema::dropIfExists('tasks');
    }
};
