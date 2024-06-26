<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('role_user');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }
}
