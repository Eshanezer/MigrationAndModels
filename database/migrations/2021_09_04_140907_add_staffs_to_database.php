<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStaffsToDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->string('name')->nullable(true);
            $table->string('surename')->default("Wijesinghe");
            $table->integer('age')->default(0);
            $table->double('salary')->default(0);
            $table->boolean('statues')->default(false);
            $table->date('birthday');
            $table->dateTime('registered')->nullable(false);
            $table->string('position')->default('staff');
            $table->dateTime('updated')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('staffs');
    }
}
