<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePermissionsTable extends Migration
{
	final public function up(): void
	{
		Schema::create('role_permissions', function (Blueprint $table) {
			$table->id('role_perm_id');
			$table->foreignId('role_perm_role_id')->constrained('roles', 'role_id');
			$table->foreignId('role_perm_perm_id')->constrained('permissions', 'perm_id');
			$table->boolean('role_perm_is_active')->default(true);
			$table->timestamp('role_perm_created_at')->useCurrent();
			$table->timestamp('role_perm_updated_at')->nullable()->useCurrentOnUpdate();
			$table->timestamp('role_perm_deleted_at')->nullable();
		});
	}

	final public function down(): void
	{
		Schema::dropIfExists('role_permissions');
	}
}