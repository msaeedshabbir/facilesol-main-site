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
        Schema::table('team', function (Blueprint $table) {
            $table->string('linkedin', 100)->after('longintro');
            $table->string('insta', 100)->after('longintro');
            $table->string('twitter', 100)->after('longintro');
            $table->string('facebook', 100)->after('longintro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('team', function (Blueprint $table) {
            //
        });
    }
};
