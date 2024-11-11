<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('cover_letter')->nullable();
            $table->json('files')->nullable();
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending'); // 'pending', 'accepted', 'rejected'
            $table->uuid('job_listing_id');
            $table->uuid('user_id');
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('job_listing_id')->references('id')->on('job_listings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
