<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolesTable extends Migration
{
	final public function up(): void
	{
		Schema::create('user_roles', function (Blueprint $table) {
			$table->id('user_role_id');
			$table->foreignId('user_role_user_id')->constrained('users', 'user_id');
			$table->foreignId('user_role_role_id')->constrained('roles', 'role_id');
			$table->boolean('user_role_is_active')->default(true);
			$table->timestamp('user_role_created_at')->useCurrent();
			$table->timestamp('user_role_updated_at')->nullable()->useCurrentOnUpdate();
			$table->timestamp('user_role_deleted_at')->nullable();
		});
	}

	final public function down(): void
	{
		Schema::dropIfExists('user_roles');
	}
}