<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('api_key', 64)->unique()->nullable()->after('stripe_commission_rate');
            $table->boolean('api_enabled')->default(false)->after('api_key');
            $table->integer('api_rate_limit')->default(60)->after('api_enabled');
            $table->timestamp('api_key_generated_at')->nullable()->after('api_rate_limit');

            $table->index('api_key');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['api_key']);
            $table->dropColumn(['api_key', 'api_enabled', 'api_rate_limit', 'api_key_generated_at']);
        });
    }
};
