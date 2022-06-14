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
        Schema::create('items', function (Blueprint $table) {
            $table->id()->comment('big increments');

            $table->boolean('checked')->default(false);
            $table->dateTime('checked_at', $precision = 0)->nullable();
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->integer('number');
            $table->text('title');
            $table->longText('notes');

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
        Schema::dropIfExists('items');
    }
};
