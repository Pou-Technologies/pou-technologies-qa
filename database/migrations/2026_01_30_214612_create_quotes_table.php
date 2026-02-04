<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('quote_number')->unique(); // QT-2026-001
            $table->foreignId('prospect_id')->constrained()->cascadeOnDelete();
            $table->enum('status', ['draft', 'sent', 'viewed', 'accepted', 'rejected', 'expired'])->default('draft');
            $table->date('valid_until')->nullable();
            $table->text('notes')->nullable(); // Custom message to client
            $table->decimal('subtotal', 10, 2)->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->decimal('total', 10, 2)->default(0);
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('viewed_at')->nullable();
            $table->timestamps();

            $table->index('status');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
