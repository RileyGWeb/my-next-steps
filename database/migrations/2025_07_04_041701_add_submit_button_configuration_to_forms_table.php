<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->string('submit_button_text')->default('Submit')->after('schema');
            $table->string('submit_button_color')->default('primary')->after('submit_button_text');
            $table->string('submit_button_size')->default('lg')->after('submit_button_color');
            $table->boolean('show_submit_button')->default(true)->after('submit_button_size');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->dropColumn([
                'submit_button_text',
                'submit_button_color', 
                'submit_button_size',
                'show_submit_button'
            ]);
        });
    }
};
