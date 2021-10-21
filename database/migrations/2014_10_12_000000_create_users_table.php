<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    final public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_first_name');
            $table->string('user_middle_name')->nullable();
            $table->string('user_last_name');
            $table->string('user_nick_name')->nullable();
            $table->string('user_username')->unique();
            $table->string('user_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_password');
            $table->string('user_profile_picture')->nullable();
            $table->string('user_cover_picture')->nullable();
            $table->boolean('user_is_active')->default(true);
            $table->string('user_remember_token')->nullable();
            $table->timestamp('user_created_at')->nullable();
            $table->timestamp('user_updated_at')->nullable();
            $table->timestamp('user_deleted_at')->nullable();
        });
    }

    final public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
