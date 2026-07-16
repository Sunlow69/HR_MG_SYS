<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wage_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('users')->onDelete('cascade');
            $table->decimal('old_rate', 8, 2)->nullable();
            $table->decimal('new_rate', 8, 2);
            $table->foreignId('requested_by')->constrained('users')->onDelete('cascade'); // HR
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->onDelete('cascade'); // Admin
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wage_requests');
    }
};