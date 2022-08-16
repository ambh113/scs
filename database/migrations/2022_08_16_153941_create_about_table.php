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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('enrollment_number')->nullable();
            $table->string('current_location')->nullable();
            $table->string('college_email')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designtion')->nullable();
            $table->string('experience')->nullable();
            $table->unsignedBigInteger('scs_aluminis_id');
            $table->foreign('scs_aluminis_id')->references('id')->on('scs_aluminis');
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
        Schema::dropIfExists('about');
    }
};
