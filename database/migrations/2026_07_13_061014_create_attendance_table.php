<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('users')->onDelete('cascade');
            $table->date('date');
            $table->time('check_in')->nullable();
            $table->time('check_out')->nullable();
            $table->decimal('hours', 5, 2)->nullable();
            $table->enum('status', ['present', 'late', 'absent', 'weekend'])->default('present');
            $table->timestamps();

            $table->unique(['employee_id', 'date']); // one record per employee per day
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};