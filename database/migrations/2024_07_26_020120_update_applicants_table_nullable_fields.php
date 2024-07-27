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
            // Set default values for columns that are currently null
            DB::table('applicants')->whereNull('phone')->update(['phone' => '']);
            DB::table('applicants')->whereNull('address')->update(['address' => '']);
            DB::table('applicants')->whereNull('city')->update(['city' => '']);
            DB::table('applicants')->whereNull('state')->update(['state' => '']);
            DB::table('applicants')->whereNull('zip')->update(['zip' => '']);
            DB::table('applicants')->whereNull('country')->update(['country' => '']);
            DB::table('applicants')->whereNull('resume')->update(['resume' => '']);
            DB::table('applicants')->whereNull('cover_letter')->update(['cover_letter' => '']);
            DB::table('applicants')->whereNull('status')->update(['status' => '']);
            DB::table('applicants')->whereNull('notes')->update(['notes' => '']);
            DB::table('applicants')->whereNull('source')->update(['source' => '']);
            DB::table('applicants')->whereNull('ip_address')->update(['ip_address' => '']);
            DB::table('applicants')->whereNull('user_agent')->update(['user_agent' => '']);
            DB::table('applicants')->whereNull('referrer')->update(['referrer' => '']);

            // Change columns to not nullable
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
