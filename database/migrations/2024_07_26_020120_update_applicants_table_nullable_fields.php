<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateApplicantsTableNullableFields extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->string('phone')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('state')->nullable()->change();
            $table->string('zip')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->string('resume')->nullable()->change();
            $table->string('cover_letter')->nullable()->change();
            $table->string('status')->nullable()->change();
            $table->string('notes')->nullable()->change();
            $table->string('source')->nullable()->change();
            $table->string('ip_address')->nullable()->change();
            $table->string('user_agent')->nullable()->change();
            $table->string('referrer')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->string('phone')->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
            $table->string('city')->nullable(false)->change();
            $table->string('state')->nullable(false)->change();
            $table->string('zip')->nullable(false)->change();
            $table->string('country')->nullable(false)->change();
            $table->string('resume')->nullable(false)->change();
            $table->string('cover_letter')->nullable(false)->change();
            $table->string('status')->nullable(false)->change();
            $table->string('notes')->nullable(false)->change();
            $table->string('source')->nullable(false)->change();
            $table->string('ip_address')->nullable(false)->change();
            $table->string('user_agent')->nullable(false)->change();
            $table->string('referrer')->nullable(false)->change();
        });
    }
}
