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
        Schema::create('course_certificates', function (Blueprint $table) {
            $table->id('certificate_id');
            $table->string('credential_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('masterclass_id');
            $table->boolean('certificate_active');
            $table->string('certificate_validate');
            $table->string('certificate_expired');
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
        Schema::dropIfExists('course_certificates');
    }
};