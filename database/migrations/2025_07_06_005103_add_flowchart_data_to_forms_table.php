<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->json('flowchart_positions')->nullable();
            $table->json('flowchart_connections')->nullable();
            $table->boolean('is_flowchart_complete')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->dropColumn(['flowchart_positions', 'flowchart_connections', 'is_flowchart_complete']);
        });
    }
};
