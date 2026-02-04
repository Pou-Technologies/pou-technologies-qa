<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('vimeo_url')->nullable()->after('is_digital');
            $table->string('digital_file')->nullable()->after('vimeo_url');
            $table->string('digital_file_name')->nullable()->after('digital_file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['vimeo_url', 'digital_file', 'digital_file_name']);
        });
    }
};
