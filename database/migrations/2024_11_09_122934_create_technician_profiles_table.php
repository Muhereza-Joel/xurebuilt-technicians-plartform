<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicianProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technician_profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('skills');
            $table->text('certifications')->nullable();
            $table->text('experience')->nullable();
            $table->string('location')->nullable();
            $table->boolean('verified')->default(false);
            $table->uuid('user_id');
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technician_profiles');
    }
}
