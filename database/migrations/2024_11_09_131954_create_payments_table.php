<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('currency');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method');
            $table->enum('status', ['pending', 'completed'])->default('pending'); // 'pending', 'completed'
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Technician receiving the payment
            $table->foreignId('job_listing_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('payments');
    }
}
